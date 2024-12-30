<?php

namespace App\Events;

use App\Models\Photo;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PhotoLiked implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $photo;

    public function __construct(Photo $photo)
    {
        $this->photo = $photo;
    }

    public function broadcastOn()
    {
        return new Channel('photo-likes');
    }
    use App\Events\PhotoLiked;

public function like(Photo $photo)
{
    $photo->increment('likes_count');
    broadcast(new PhotoLiked($photo));
}

}
