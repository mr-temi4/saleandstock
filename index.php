<?php

error_reporting(E_ERROR);
date_default_timezone_set("Europe/Moscow");
setlocale(LC_ALL,"ru_RU.UTF-8");
mb_internal_encoding("UTF-8");
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';


// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);


require_once($yii);
Yii::createWebApplication($config)->run();
?>