<?php
namespace App\Common\Utils;

class SystemInfo {

    public static function getDiskUsage() {
        $dffile = <<<EOF
Filesystem     1K-blocks    Used Available Use% Mounted on
/dev/vda1       41151808 6115860  32922516  16% /
devtmpfs        16381264       0  16381264   0% /dev
tmpfs           16390884       0  16390884   0% /dev/shm
tmpfs           16390884     468  16390416   1% /run
tmpfs           16390884       0  16390884   0% /sys/fs/cgroup
/dev/vdb1      103080224 2248952  95588444   3% /www
tmpfs            3278180       0   3278180   0% /run/user/0
EOF;


        $df      = round(@disk_free_space("."), 3);
        $dt      = round(@disk_total_space("."), 3);
        $dfvalue = static::unit($dt, 'B');
        $total   = $dfvalue['value'];
        $free    = round($df / ($dt && $dfvalue['value'] ? ($dt / $dfvalue['value']) : 1), 3);
        $current = [
            'current' => [
                'name'    => 'current',
                'total'   => $total,
                'free'    => $free,
                'used'    => ($total - $free),
                'percent' => round(($total - $free) / ($total ?: 1) * 100, 3),
                'unit'    => $dfvalue['unit'],
            ],
        ];
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            return $current;
        } else {
            $str = explode("\n", $dffile);
            $res = [];
            unset($str[0]);
            foreach ($str as $v) {
                if (preg_match('/(?P<disk>[\w\/]+)\s+(?P<total>[\w\/]+)\s+(?P<used>[\w\/]+)\s+(?P<available>[\w\/]+)\s+(?P<persent>[\w\/%]+)\s+(?P<mounted>[\w\/]+)\s*/', $v, $match)) {
                    $res[$match['mounted']] = [
                        'totalOld' => $match['total'],
                        'name'     => $match['mounted'],
                        'free'     => round(@disk_free_space($match['mounted']), 3),
                        'total'    => round(@disk_total_space($match['mounted']), 3),
                    ];

                    $unitvalue = static::unit($res[$match['mounted']]['total'], 'B');

                    $res[$match['mounted']]['free']  = round($res[$match['mounted']]['free'] / ($unitvalue['value'] && $res[$match['mounted']]['total'] ? ($res[$match['mounted']]['total'] / $unitvalue['value']) : 1), 3);
                    $res[$match['mounted']]['unit']  = $unitvalue['unit'];
                    $res[$match['mounted']]['total'] = round($unitvalue['value'], 3);

                    $res[$match['mounted']]['used']    = $res[$match['mounted']]['total'] - $res[$match['mounted']]['free'];
                    $res[$match['mounted']]['percent'] = round($res[$match['mounted']]['used'] / ($res[$match['mounted']]['total'] ?: 1) * 100, 3);
                }
            }

            return $res;
        }
    }

    public static function unit($value, $unit = 'kb') {
        static $unitlevel = ['B' => 0, 'KB' => 1, 'MB' => 2, 'GB' => 3, 'TB' => 4, 'PB' => 5];
        $unitlevel = $unitlevel;
        if (array_key_exists(strtoupper($unit), $unitlevel)) {
            $level = $unitlevel[strtoupper($unit)];
        } else {
            return false;
        }
        $len = strlen((string)$value);
        if ($len >= 9) {
            $sub = 3;
        } elseif ($len >= 6) {
            $sub = 2;
        } elseif ($len >= 3) {
            $sub = 1;
        } else {
            $sub = 0;
        }
        if ($sub + $level > 5) {
            $sub = 5 - $level;
        }
        $subTotal = 1;
        for ($i = 0; $i < $sub; $i++) {
            $subTotal = $subTotal * 1024;
        }
        $value = round($value / ($subTotal ?: 1), 3);
        $flip  = array_flip($unitlevel);
        $unit  = isset($flip[$sub + $level]) ? $flip[$sub + $level] : $unit;

        return ['value' => $value, 'unit' => $unit];
    }

}
