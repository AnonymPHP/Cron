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


class ConsoleTask extends PhpTask
{
    /**
     * register the command
     *
     * @param string $command
     * @return Task
     */
    public function setCommand($command)
    {
        $this->command = 'anonym '.$command;

        return $this;
    }
}