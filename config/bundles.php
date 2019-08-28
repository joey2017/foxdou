<?php

return [
    Symfony\Bundle\WebServerBundle\WebServerBundle::class => ['dev' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    App\Common\Bundle\SimpleRecord\SimpleRecordBundle::class => ['all' => true],
    Endroid\QrCodeBundle\EndroidQrCodeBundle::class => ['all' => true],
    App\Common\Bundle\SimplePay\SimplePayBundle::class => ['all' => true],
    Symfu\SimpleFormBundle\SimpleFormBundle::class => ['all' => true],
    Oneup\UploaderBundle\OneupUploaderBundle::class => ['all' => true],
    Oneup\FlysystemBundle\OneupFlysystemBundle::class => ['all' => true],
    Snc\RedisBundle\SncRedisBundle::class => ['all' => true],
    Enqueue\Bundle\EnqueueBundle::class => ['all' => true],
];
