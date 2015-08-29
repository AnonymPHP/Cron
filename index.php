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


$basic = new \Anonym\Components\Cron\BasicCron();

$basic->event(function(){
   return \Anonym\Components\Cron\Task\Task::exec('echo foo')->daily();
});

$basic->run();