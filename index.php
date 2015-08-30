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
use Anonym\Components\Cron\BasicCron;
use Anonym\Components\Cron\Task\Task;

$cron = new BasicCron();
$cron->event(function(){
    return Task::exec('rm', ['/var/www/html/cron/test/*']);
});

$cron->run();