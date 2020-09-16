<?php

namespace App\InfoPlus;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class InfoPlusEvent
{

    public $user;
    public $when;
    public $formData;
    public $fields;
    public $step;
    public $actionCode;
    public $actionName;
    public $nextSteps;
    public $endStep;
    public $suggestion;
    public $fieldPath;
    public $release;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $data = json_decode($request->json("data"));
        $this->user     = data_get($data, "user");
        $this->when     = data_get($data, "when");
        $this->formData = data_get($data, "formData");
        $this->fields   = data_get($data, "fields");
        $this->step     = data_get($data, "step");
        $this->release  = data_get($data, "release");
    }
}
