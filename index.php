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

$process = new \Symfony\Component\Process\Process('crontab -l');
$process->run();

$output = ($process->getIncrementalOutput());

$lines = array_filter(explode(PHP_EOL, $output), function($line) {
    return '' != trim($line);
});

var_dump($lines);