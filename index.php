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

$cron = new \Anonym\Components\Cron\Cron();
$cron->event(function(){
   return \Anonym\Components\Cron\Task\Task::call(function(){
        echo 'hello world';
    }) ;
});

var_dump(\Anonym\Components\Cron\EventReposity::getEvents());