<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    //
    public function get10()
    {
        //$events = DB::table('events')->desc('date')->take(10)->get();
        $events = DB::table('events')->orderBy('date','desc')->take(10)->pluck('title','body');
        return array_reverse($events);
    }

}
