<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function firstListener($event){
        echo $event;
    }
    
    public function secondListener($event){
        echo $event;
    }

    /**
     * Subscribe the event.
     *
     * @param  object  $event
     * @return void
     */
    public function subscribe($event)
    {
        $event->listen('first.event', "\App\Listeners\myListener@firstListener");
        $event->listen('second.event', "\App\Listeners\myListener@SecondListener");
    }
}
