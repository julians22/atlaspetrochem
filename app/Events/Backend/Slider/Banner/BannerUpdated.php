<?php

namespace App\Events\Backend\Slider\Banner;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BannerUpdated
{
    use SerializesModels;

    public $banner;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($banner)
    {
        $this->banner = $banner;
    }
}
