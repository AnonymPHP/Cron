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
     * @return Job
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
     * @return Job
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }
}