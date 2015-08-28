<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */


namespace Anonym\Components\Cron\Task;

/**
 * Class PhpTask
 * @package Anonym\Components\Cron\Task
 */
class PhpTask extends Task
{

    /**
     * get the php.exe path
     *
     * @return string
     */
    private function  resolvePhpInstalledPath()
    {
        if (null !== $path = exec('which php')) {
            return $path;
        }

        return '/usr/bin/php';
    }

    /**
     * register the command
     *
     * @param string $command
     * @return Task
     */
    public function setCommand($command)
    {
        $this->command = $this->resolvePhpInstalledPath().' '.$command;

        return $this;
    }
}