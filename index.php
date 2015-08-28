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

$phptask = new \Anonym\Components\Cron\Task\ExecTask();
$phptask->setCommand('ls -test');
echo $phptask->getCommand();