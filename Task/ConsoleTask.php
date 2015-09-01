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
    public function setCommand($command, $base = null)
    {

        $base = ($base === null) ? BASE : $base;

        parent::setCommand('anonym '.$command);
        $this->command = 'cd '.$this->resolveBase($base).' && '. $this->getCommand();
        return $this;
    }

    /**
     * resolve the base string
     *
     * @param string $base
     * @return string
     */
    private function resolveBase($base)
    {
        $last = substr($base, -1);

        if ($last !== '/') {
            return $base.'/';
        }

        return $base;
    }
}
