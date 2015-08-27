<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */


namespace Anonym\Components\Cron\Schedule;

/**
 * Class Job
 * @package Anonym\Components\Cron\Job
 */
class Schedule
{

    /**
     * the minute of cronjob
     *
     * @var string
     */
    private $minute = '*';

    /**
     * the hour of cronjob
     *
     * @var string
     */
    private $hour = '*';

    /**
     * the day of mount
     *
     * @var string
     */
    private $dayOfMounth = '*';

    /**
     * the mounth of cronjob
     *
     * @var string
     */
    private $mounth = '*';

    /**
     * the day of week
     *
     * @var string
     */
    private $dayOfWeek = '*';

    /**
     * the year of cronjob
     *
     * @var string
     */
    private $year;

    /**
     * the full time string
     *
     * @var string
     */
    private $pattern;

    /**
     * @return string
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @param string $minute
     * @return Job
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;

        return $this;
    }

    /**
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param string $hour
     * @return Schedule
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * @return string
     */
    public function getDayOfMounth()
    {
        return $this->dayOfMounth;
    }

    /**
     * @param string $dayOfMounth
     * @return Schedule
     */
    public function setDayOfMounth($dayOfMounth)
    {
        $this->dayOfMounth = $dayOfMounth;

        return $this;
    }

    /**
     * @return string
     */
    public function getMounth()
    {
        return $this->mounth;
    }

    /**
     * @param string $mounth
     * @return Schedule
     */
    public function setMounth($mounth)
    {
        $this->mounth = $mounth;

        return $this;
    }

    /**
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param string $dayOfWeek
     * @return Schedule
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $year
     * @return Schedule
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     * @return Schedule
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }


    /**
     * Splice the given value into the given position of the expression.
     *
     * @param  int  $position
     * @param  string  $value
     * @return $this
     */
    protected function spliceIntoPosition($position, $value)
    {
        $segments = explode(' ', $this->pattern);
        $segments[$position - 1] = $value;
        return $this->cron(implode(' ', $segments));
    }

    /**
     * set the cron pattern
     *
     * @param string $expression
     * @return Schedule
     */
    public function cron($expression)
    {
        return $this->setPattern($expression);
    }


    /**
     * Schedule the event to run hourly.
     *
     * @return $this
     */
    public function hourly()
    {
        return $this->cron('0 * * * * *');
    }
    /**
     * Schedule the event to run daily.
     *
     * @return $this
     */
    public function daily()
    {
        return $this->cron('0 0 * * * *');
    }


    /**
     * Schedule the event to run monthly.
     *
     * @return $this
     */
    public function monthly()
    {
        return $this->cron('0 0 1 * * *');
    }
    /**
     * Schedule the event to run yearly.
     *
     * @return $this
     */
    public function yearly()
    {
        return $this->cron('0 0 1 1 * *');
    }
    /**
     * Schedule the event to run every minute.
     *
     * @return $this
     */
    public function everyMinute()
    {
        return $this->cron('* * * * * *');
    }
    /**
     * Schedule the event to run every five minutes.
     *
     * @return $this
     */
    public function everyFiveMinutes()
    {
        return $this->cron('*/5 * * * * *');
    }
    /**
     * Schedule the event to run every ten minutes.
     *
     * @return $this
     */
    public function everyTenMinutes()
    {
        return $this->cron('*/10 * * * * *');
    }
    /**
     * Schedule the event to run every thirty minutes.
     *
     * @return $this
     */
    public function everyThirtyMinutes()
    {
        return $this->cron('0,30 * * * * *');
    }

}