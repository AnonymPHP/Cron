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


class TaskReposity
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
        return $this->command;
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
