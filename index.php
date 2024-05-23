<?php
// PHP 版本判断
if (version_compare(phpversion(), '5.4', '<')) {
    header('Content-type:text/html;charset=utf-8');
    echo sprintf(
        '<h3>程序运行失败：</h3><blockquote>您的 PHP 版本低于最低要求 5.4，当前版本为 %s</blockquote>',
        phpversion()
    );
    exit;
}

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Core/Define.php';

error_reporting(FRAMEWORK_DEBUG);

use Framework\Mian;

$App = new Mian;
$App->run();