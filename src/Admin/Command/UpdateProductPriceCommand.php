<?php
namespace App\Admin\Command;

use App\Admin\Model\AdminUser;
use App\Admin\Model\CronJob;
use App\Admin\Service\AdminOperatonLogManager;
use App\Admin\Service\ProductManager;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

class UpdateProductPriceCommand extends Command implements ServiceSubscriberInterface {
    use ServiceSubscriberTrait;

    protected static $defaultName = 'product:update_price';

    /** @var SymfonyStyle */
    private $io;

    /**
     * {@inheritdoc}
     */
    protected function configure() {
        $this
            ->setDescription('定时更新商品价格的命令')
            ->addOption('dry-run',     'd', InputOption::VALUE_NONE, '只打印任务信息，不执行')
            ->addArgument('jobs', InputArgument::OPTIONAL | InputArgument::IS_ARRAY, '要任务 ID 列表')
            ->setHelp(<<<HELP
命令 <info>%command.name%</info> 可以用来定时更新指定的商品价格信息

语法：
  
    bin/console %command.name% [options] [jobid1] [jobid2] ...

使用样例：

  bin/console model:generate 1234 2345

HELP
            );
    }

    protected function initialize(InputInterface $input, OutputInterface $output) {
        $this->io = new SymfonyStyle($input, $output);
    }

    protected function adminLogMgr() : AdminOperatonLogManager {
        return $this->container->get(__METHOD__);
    }
    protected function logger() : LoggerInterface {
        return $this->container->get(__METHOD__);
    }
    protected function productManager() : ProductManager {
        return $this->container->get(__METHOD__);
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        while(true) {
            $this->doExecute($input, $output);

            $this->io->write('.');
            sleep(10);
        }
    }

    protected function doExecute(InputInterface $input, OutputInterface $output) {
        $dryRun = $input->getOption('dry-run');
        $jobIds = $input->getArgument('jobs');

        try {
            // ScheduledJob::transaction(function() use($dryRun, $jobIds) {
                $now = date('Y-m-d H:i:s');
                $conditions = $jobIds ? ['id' => $jobIds] : [];
                $conditions = array_merge($conditions, ['enabled' => 1, 'scheduled_at' => ['<=' => $now], 'status' => CronJob::STATUS_PENDING]);
                // $jobs = ScheduledJob::all($conditions, ['order' => 'scheduled_at', 'for' => 'UPDATE']);
                $jobs = CronJob::all($conditions, ['order' => 'scheduled_at', 'hydrate' => true]);

                if(!$jobs) {
                    $this->io->note("没有产品价格修改计划任务");
                    return false;
                }

                if(!$jobIds) {
                    foreach ($jobs as $job) {
                        $jobIds[] = $job->id;
                    }
                }

                $context['job_ids'] = $jobIds;

                CronJob::update_all(['status' => CronJob::STATUS_RUNNING], ['id' => $jobIds]);

                $jobResults = [];
                foreach ($jobs as $job) {
                    $this->io->write("正在处理 {$job->id} ...");
                    $jobPayload = json_decode($job->payload, true);
                    if($dryRun) {
                        $this->dryRunJob($job, $jobPayload);
                        $this->io->writeln(" 成功（DRY RUN）");
                    } else {
                        $succeed = $this->runJob($job, $jobPayload);
                        $jobResults[$job->id] = $succeed;
                        $job->status = $succeed ? CronJob::STATUS_FINISHED : CronJob::STATUS_FAILED;
                        $job->save();
                        $this->io->writeln($jobResults[$job->id] ? '成功' : '失败');
                    }
                }

                $context['job_results'] = $jobResults;

                $count = count($jobs);
                $this->io->note("任务处理完毕，共处理 {$count} 个任务, ids=" . json_encode($jobIds) . ", 结果：" . json_encode($jobResults));

                // return false;
            // });
        } catch (\Exception $e) {
            $this->logger()->error('处理产品价格修改计划任务失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));
        }
    }

    protected function runJob($job, $payload) {
        $context = ['job_id' => $job->id, 'user_id' => $job->creator_user_id];
        try {
            $userId        = $job->creator_user_id;
            $user          = AdminUser::find($userId);

            ['products' => $productInfos, 'specific_user_settings' => $specificUserSettings, 'group_settings' => $groupSettings] = $payload;

            $this->productManager()->batchUpdateProducts($user, $productInfos, $specificUserSettings, $groupSettings);

            return true;

        } catch (\Exception $e) {
            $this->logger()->error('处理任务失败', array_merge($context, ['error' => $e->getMessage(), 'stack' => $e->getTraceAsString()]));

            return false;
        }

    }


    protected function dryRunJob($jobId, $jobPayload) {
        $this->io->text("JobId: {$jobId}");
        $this->io->text(json_encode($jobPayload, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
    }
}
