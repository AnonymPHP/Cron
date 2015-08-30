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

use Anonym\Components\Cron\Schedule\Schedule;
use Carbon\Carbon;
use Cron\CronExpression;
use Symfony\Component\Process\Process;
use Closure;
/**
 * Class TaskReposity
 * @package Anonym\Components\Cron\Task
 */
class TaskReposity extends Schedule
{

    /**
     * the timezone
     *
     * @var string
     */
    public $timezone;
    /**
     * the command for job
     *
     * @var string
     */
    protected $command;

    /**
     * the output
     *
     * @var string
     */
    private $output;
    /**
     * set the command and create a new instance
     *
     * @param mixed $command
     */
    public function __construct($command)
    {
        $this->setCommand($command);
    }

    /**
     * Get the default output depending on the OS.
     *
     * @return string
     */
    protected function getDefaultOutput()
    {
        return (strpos(strtoupper(PHP_OS), 'WIN') === 0) ? 'NUL' : '/dev/null';
    }

    /**
     * build the exec command
     *
     * @return string
     */
    public function buildCommand()
    {
        $command = $this->getCommand();
        $output = $this->output !== null ? $this->output : $this->getDefaultOutput();

        return $command.' > /var/www/html/log.txt 2>&1';
        return $command.' > '.$output.' 2>&1';
    }

    /**
     * build command with time expression and command line
     *
     * @return string
     */
    public function buildCommandWithExpression()
    {
        return sprintf('%s %s', $this->getPattern(), $this->buildCommand());
    }
    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * register the command
     *
     * @param string $command
     * @return $this
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * check the event for call
     *
     *
     * @return bool
     */
    public function isDue()
    {
        $date = Carbon::now();

        if ($this->timezone) {
            $date->setTimezone($this->timezone);
        }

        $response = CronExpression::factory($this->getPatternString())->isDue($date->toDateTimeString());
        return $response;
    }

    /**
     * get the base path
     *
     * @return string
     */
    private function resolveBasePath()
    {
        return defined('BASE') ? BASE: __DIR__;
    }

    /**
     * execute the commands
     *
     */
    public function execute()
    {
        if($this->command instanceof Closure)
        {
           $this->runClosureTask();
        }else{
            $this->runExecTask();
        }
    }

    /**
     * get the description
     *
     *
     * @return string
     */
    public function getSummaryForDescription()
    {
        return $this->command instanceof Closure ? 'Closure' : $this->buildCommand();
    }
    /**
     * run the closure
     *
     */
    private function runClosureTask()
    {
        call_user_func($this->command);
    }
    /**
     * run the exec task
     */
    private function runExecTask()
    {
        chdir($this->resolveBasePath());
        $process = new Process($this->buildCommand());
        $process->run();
    }
}
