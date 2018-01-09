<?php

namespace App\Listeners;

use App\Events\PirepSave;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventPirepSaveListener
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
     * @param  PirepSave  $event
     * @return void
     */
    public function handle(PirepSave $event)
    {
        //
    }
}
