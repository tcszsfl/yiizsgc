<?php
/**
 * Yii console bootstrap file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

defined('YII_DEBUG') or define('YII_DEBUG', true);

// fcgi 默认没有定义 STDIN 和 STDOUT
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
defined('STDOUT') or define('STDOUT', fopen('php://stdout', 'w'));

// 注册 Composer 自动加载器
require(__DIR__ . '/vendor/autoload.php');

// 包含 Yii 类文件
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

// 加载应用配置
$config = require(__DIR__ . '/config/console.php');

$application = new yii\console\Application($config);
$exitCode = $application->run();
exit($exitCode);