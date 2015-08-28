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
use Closure;
/**
 * Class Cron
 * @package Anonym\Components\Cron
 */
class Cron
{

    public function call(Closure $command)
    {
        $response = $command();
        if($this->resolveCommandResponse($response))
        {
            EventReposity::add($response);
        }
    }



}
