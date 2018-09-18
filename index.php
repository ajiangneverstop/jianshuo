<?php
/**
 * 入口文件
 */
error_reporting(0);
define('INBook', true);
define('BOOK_ROOT', str_replace('\\', '/', dirname(__FILE__)));
define('SiteUrl', htmlspecialchars(strtolower(($_SERVER['HTTPS'] == 'on' ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/')))));

require(BOOK_ROOT.'/config.ini.php');
require(BOOK_ROOT.'/system/function/common.php');
require(BOOK_ROOT.'/system/core/runtime. php');