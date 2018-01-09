<?php

namespace App\Events;

use App\PIREP;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PirepSave
{
    use InteractsWithSockets, SerializesModels;

    public $pirep;
    /**
     * Create a new event instance.
     *
     * @param PIREP $pirep
     */
    public function __construct(PIREP $pirep)
    {
        $this->pirep = $pirep;
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
