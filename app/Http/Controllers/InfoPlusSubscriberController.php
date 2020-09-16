<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\InfoPlus\InfoPlusEvent;
use App\InfoPlus\InfoPlusMessenger;
use App\InfoPlus\InfoPlusResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InfoPlusSubscriberController extends Controller
{
    public function __invoke(Request $request)
    {
        $event = new InfoPlusEvent($request);
        $method = Str::camel(strtolower(sprintf("ON_%s", $request->event)));
        $messenger = new InfoPlusMessenger($event);
        if (method_exists($messenger, $method)) {
            return $messenger->$method($event);
        } else {
            return new InfoPlusResponse($event);
        }
    }
}
