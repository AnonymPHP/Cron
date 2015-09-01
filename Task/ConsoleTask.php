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
 * Class ConsoleTask
 * @package Anonym\Components\Cron\Task
 */
class ConsoleTask extends PhpTask
{
    /**
     * register the command
     *
     * @param string $command
     * @param string $base
     * @return $this
     */
    public function setCommand($command, $base = '')
    {
         parent::setCommand($base.' anonym '.$command);

        return $this;
    }
}
