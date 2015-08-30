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
$file = '/var/www/html/log.txt';

if(!file_exists($file))
{
 exec('touch '.$file);
}

$cron = new BasicCron();
