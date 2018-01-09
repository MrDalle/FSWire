<?php

namespace App\Events;

use App\ACARSData;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PosReportSave
{
    use InteractsWithSockets, SerializesModels;

    public $rpt;

    /**
     * Create a new event instance.
     *
     * @param ACARSData $rpt
     */
    public function __construct(ACARSData $rpt)
    {
        $this->rpt = $rpt;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return [];
    }
}
