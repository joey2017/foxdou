<?php
define('PSL_DEBUG',   1);
define('PSL_INFO',    2);
define('PSL_NOTICE',  3);
define('PSL_WARNING', 4);
define('PSL_ERROR',   5);

$__PSL_LOGGING_LEVELS = array(
    PSL_DEBUG   => 'DEBUG',
    PSL_INFO    => 'INFO',
    PSL_NOTICE  => 'NOTICE',
    PSL_WARNING => 'WARNING',
    PSL_ERROR   => 'ERROR',
);

$__PSL_CONFIG = ['log_file' => null, 'level' => PSL_INFO, 'is_first' => true];

function PSL_INIT($log_file, $level = PSL_INFO) {
    global $__PSL_CONFIG;

    $__PSL_CONFIG['log_file'] = $log_file;
    $__PSL_CONFIG['level'] = $level;
    $__PSL_CONFIG['is_first'] = true;
}

function LOGD() {
    $args = func_get_args();
    PSL_LOG(PSL_DEBUG, $args);
}

function LOGI() {
    $args = func_get_args();
    PSL_LOG(PSL_INFO, $args);
}

function LOGN() {
    $args = func_get_args();
    PSL_LOG(PSL_NOTICE, $args);
}

function LOGW() {
    $args = func_get_args();
    PSL_LOG(PSL_WARNING, $args);
}

function LOGE() {
    $args = func_get_args();
    PSL_LOG(PSL_ERROR, $args);
}

function PSL_LOG($level, $args) {
    global $__PSL_CONFIG, $__PSL_LOGGING_LEVELS;

    if($level < $__PSL_CONFIG['level']) {
        return;
    }

    $format = $args[0];
    $n_placeholder = preg_match_all('/%[a-zA-Z]/', $format);
    $n_args = count($args);
    for($i = 0; $i < ($n_placeholder - $n_args + 1); $i++) {
        $args[] = "";
    }

    list($seconds, $ms) = explode(".", microtime(true));
    $ms = str_pad(substr($ms, 0, 3), 3, '0', STR_PAD_LEFT);
    $now = date("Y-m-d H:i:s.{$ms}", $seconds);

    $reqPath = $_SERVER['REQUEST_URI'] ?? '';

    $level_name = $__PSL_LOGGING_LEVELS[$level];
    $formated = @call_user_func_array('sprintf', $args);
    $log_record = "[{$now}][{$level_name}]: {$reqPath} {$formated}\n";

    if(!$__PSL_CONFIG['log_file']) {
        echo $log_record;
        $__PSL_CONFIG['is_first'] = false;
        return;
    }

    $file = @fopen($__PSL_CONFIG['log_file'], 'a');
    if($file) {
        fwrite($file, $log_record);
    } else {
        if($__PSL_CONFIG['is_first']) {
            echo "[{$now}][ERROR]: [PhpSimpleLogger] Failed to open log file: {$__PSL_CONFIG['log_file']}\n";
        }

        echo $log_record;
        $__PSL_CONFIG['is_first'] = false;
    }
}
