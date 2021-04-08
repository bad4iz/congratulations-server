<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function index()
    {
        $eventType = EventType::find(1);
        dd($eventType->events);

        return view("landing");
    }
}
