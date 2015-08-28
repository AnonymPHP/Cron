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
$cron = new \Anonym\Components\Cron\Cron();
$cron->event(function(){
    return \Anonym\Components\Cron\Task\Task::file('test.php');
});

$cron->run();
