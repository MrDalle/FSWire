<?php

namespace App\Listeners;

use App\Events\PosReportSave;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventPosReportSaveListener
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
     * @param  PosReportSave  $event
     * @return void
     */
    public function handle(PosReportSave $event)
    {
        //
    }
}
