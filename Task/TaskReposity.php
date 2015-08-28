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
     * set the command and create a new instance
     *
     * @param mixed $command
     */
    public function __construct($command)
    {
        $this->setCommand($command);
    }

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
     * @return $this
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * execute the commands
     *
     */
    public function run()
    {

    }
}
