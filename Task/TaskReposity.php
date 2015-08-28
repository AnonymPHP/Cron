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

use Anonym\Components\Cron\Schedule\Schedule;

/**
 * Class TaskReposity
 * @package Anonym\Components\Cron\Task
 */
class TaskReposity extends Schedule
{
    /**
     * the command for job
     *
     * @var string
     */
    protected $command;

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->getPatternString().' '.$this->command;
    }

    /**
     * register the command
     *
     * @param string $command
     * @return Task
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }


}
