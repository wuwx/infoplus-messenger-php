<?php
namespace App\InfoPlus;

class InfoPlusResponse
{
    public $cancel;
    public $detail;
    public $formData;
    public $codes;
    public $timer;

    public function __construct(InfoPlusEvent $event)
    {

    }

    public function __toString()
    {
        return json_encode($this);
    }
}
