<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Grammars;

class Events extends Model
{
    //
     public static function get10()
    {
        //$events = DB::table('events')->desc('date')->take(10)->get();
        $events = DB::table('events')->orderBy('date','desc')->take(10)->get();
        return $events;
    }
    public static function getAllEvents()
    {
        $events = DB::table('events')->orderBy('date','desc')->get();
        return $events;

    }
   /* public static funtion getbyId(id)
    {
        $event=DB::table('events')->where('id',id)->get();
        return $event;
    }
    */
    
}
