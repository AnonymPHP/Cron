<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */


namespace Anonym\Components\Cron;
use Anonym\Components\Cron\Task\TaskReposity;
use Closure;
/**
 * Class Cron
 * @package Anonym\Components\Cron
 */
class Cron
{

    /**
     * add a new event to reposity
     *
     * Note: $command must be a closure
     *
     * @param Closure $command
     */
    public function event(Closure $command)
    {
        $response = $command();

        if($this->resolveCommandResponse($response))
        {
            EventReposity::add($response);
        }
    }

    /**
     * resolve the response
     *
     * @param mixed $response
     * @return bool
     */
    private function resolveCommandResponse($response)
    {
        return ($response !== null & $response instanceof TaskReposity) ? true:false;
    }

    /**
     *  run the all commands
     *
     */
    public function run()
    {
        $events = $this->dueEvents(EventReposity::getEvents());

        foreach($events as $event)
        {
            $event->execute();
        }
    }

    /**
     * Get all of the events on the schedule that are due.
     *
     * @param array $events
     * @return array
     */
    private function dueEvents(array $events){
        return array_filter($events, function ($event){
            return $event->isDue();
        });
    }
}
