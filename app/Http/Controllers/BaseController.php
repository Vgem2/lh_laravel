<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Login;

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
    
     public function library()
    {
        return view('library');
    }
    public function dev(Request $request)
    {
       
        $name = "";
        $pw = "";
        return view('dev.devsite',compact('name'),compact('pw'));
    }
    public function dev_post(Request $request)
    {
       
        // $post=$request->all();
        $name = $request->input('usrnm');
        $pw = $request->input('pw');
        if(Login::login($name,$pw)) 
        {
            $request->session()->put('usrnm',$name);
            return redirect('/')->with('status', 'Üdvözlet, '.$name);
        }
        return view('dev.devsite',compact('name'),compact('pw'));
    }
     public function how2()
     {
         return view('how2');
     }
  
}
