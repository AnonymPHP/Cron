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

$phptask = new \Anonym\Components\Cron\Task\PhpFileTask();
$phptask->setCommand('/path/to/test.php');
echo $phptask->getCommand();