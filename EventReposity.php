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

/**
 * Class EventReposity
 * @package Anonym\Components\Cron
 */
class EventReposity
{

    /**
     * the reposity of events
     *
     * @var array
     */
    private static $events;

    public static function add($event)
    {
        static::$events[] = $event;
    }

    /**
     * @return array
     */
    public static function getEvents()
    {
        return self::$events;
    }

    /**
     * @param array $events
     */
    public static function setEvents($events)
    {
        self::$events = $events;
    }

}
