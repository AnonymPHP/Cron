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
use Closure;

class ClosureTask extends TaskReposity
{

    /**
     * register the command
     *
     * @param Closure $command
     * @return ClosureTask
     */
    public function setCommand(Closure $command)
    {
        $this->command = $command;

        return $this;
    }

}