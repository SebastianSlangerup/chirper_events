<?php

namespace App\Events;

use App\Models\Chirp;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChirpCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Chirp $chirp;

    public function __construct(Chirp $chirp)
    {
        $this->chirp = $chirp;
    }
}
