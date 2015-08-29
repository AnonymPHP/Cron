<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */

include 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$basic = new \Anonym\Components\Cron\BasicCron();

$basic->event(function(){
   return \Anonym\Components\Cron\Task\Task::file('/var/www/html/cron/test.php')->everyMinute();
});

$basic->run();