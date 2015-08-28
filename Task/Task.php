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
/**
 * Class Task
 * @package Anonym\Components\Cron\Task
 */
class Task
{

    /**
     * call the command, command must be a Closure or string
     *
     * @param string|Closure $command
     * @return TaskInterface
     */
    public static function call($command)
    {
        return $command instanceof Closure ? new ClosureTask($command) : new ExecTask($command);
    }

    public static function file($command)
    {

    }

}
