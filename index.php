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

$phptask = new \Anonym\Components\Cron\Task\PhpTask();
$phptask->setCommand('anonym make:migration');
echo $phptask->getCommand();