<?php

namespace App\Listeners;

use App\Events\ActionDone;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThingsToDoAfterEventWasFired 
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

    /**
     * Handle the event.
     *
     * @param  ActionDone  $event
     * @return void
     */
    public function handle(ActionDone $event)
    {
        if($event->a > $event->b):
            return true;
        endif;
        echo "b is greater";
        return false;
    }
}