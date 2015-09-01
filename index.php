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


var_dump(\Anonym\Components\Cron\Task\Task::console('test', '/var/www/html/Cron/'));


echo substr( '/var/www/html/Cron/', -1);