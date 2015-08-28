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
 * Class ExecTask
 * @package Anonym\Components\Cron\Task
 */
class ExecTask extends TaskReposity
{
    /**
     * register the command
     *
     * @param string $command
     * @return Task
     */
    public function setCommand($command)
    {
        parent::setCommand($command);

        return $this;
    }

    /**
     * @param array $parameters
     * @return ExecTask
     */
    public function setParameters(array $parameters = [])
    {

    }
}

