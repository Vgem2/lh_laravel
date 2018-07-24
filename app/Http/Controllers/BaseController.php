<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class BaseController extends Controller
{
    //
    public function index()
    {
       
        $events = Events::get10();
       
        return view('home',compact('events'));
    }
    
    public function events()
    {
        $events = Events::getAllEvents();
       
        return view('events',compact('events'));
    }
    public function show($event)
    {
       
       // $event = Events::get_byid($id);
        $event = Events::find($event);
        return view('Event.event',compact('event'));
    }
    
    public function pevents()
    {
       

        return view('permanentevents');
    }
    public function dev(Request $request)
    {
       
            $post=$request->all();

        { }//do nothing
        return view('dev.devsite',compact('post'));
    }
  
}
