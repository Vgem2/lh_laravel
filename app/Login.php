<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Grammars;

class Login extends Model
{
    //
    public static function login($names,$pw)
    {
        
       
        $logins = DB::table('admin_log')->pluck('password','name');
        
        foreach ($logins as $name => $password)
        {
            
            if($name==$names && $pw==$password) return $reward=true;
        }
        return $reward=false;

     
    }
}
