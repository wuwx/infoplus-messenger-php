<?php

namespace App\InfoPlus;

class InfoPlusMessenger
{
    public function onInstanceStarting(InfoPlusEvent $event)
    {
        $response = new InfoPlusResponse($event);
        return $response;
    }

    public function onInstanceStarted(InfoPlusEvent $event)
    {
        return new InfoPlusResponse($event);
    }

    public function onInstanceCompleting(InfoPlusEvent $event)
    {
        return new InfoPlusResponse($event);
    }

    public function onInstanceCompleted(InfoPlusEvent $event)
    {
        return new InfoPlusResponse($event);
    }
}
