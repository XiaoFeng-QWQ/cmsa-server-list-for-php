<?php
/**
 * 定义核心
 */
define('FRAMEWORK_CORE', true);

/**
 * 调试模式，0为关闭，-1为打开
 * 
 * @var int
 */
define('FRAMEWORK_DEBUG', -1);

/**
 * 当前程序根目录
 * 
 * @var string
 */
define('FRAMEWORK_DIR', dirname(dirname(__FILE__)));

/**
 * 定义框架版本
 * 
 * @var int
 */
define('FRAMEWORK_VERSION', '1.0.0');

/**
 * 当前核心目录
 * 
 * @var string
 */
define('FRAMEWORK_CORE_DIR', FRAMEWORK_DIR . '/Core');

/**
 * 应用文件目录
 * 
 * @var string
 */
define('FRAMEWORK_APP_PATH', FRAMEWORK_DIR . '/App');