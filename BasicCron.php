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
use Anonym\Components\Cron\Manager\CrontabManager;
/**
 * Class BasicCron
 * @package Anonym\Components\Cron
 */
class BasicCron
{

    /**
     * the instance of cron manager
     *
     * @var CrontabManager
     */
    private $manager;

    /**
     * the instance of job
     *
     * @var CronEntry
     */
    private $job;

    /**
     *
     * create a new instance and register cron tab manager
     */
    public function __construct()
    {
        $this->setManager(new CrontabManager());
    }

    /**
     * @return CrontabManager
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param CrontabManager $manager
     * @return BasicCron
     */
    public function setManager(CrontabManager $manager)
    {
        $this->manager = $manager;

        return $this;
    }


}
