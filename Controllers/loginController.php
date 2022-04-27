<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades;


class loginController extends Controller
{
    public function checkAuth(Request $re)
    {
        $a = DB::table('reashma')->where([['email1',$re->input('email')],['pwd',$re->input('password')]])->count();
        if($a == 1)
        {
            $re->session()->put('email',$re->input('email'));
            
            return view('home');
        }
        echo "Wrong credential";
        return view('login');
        
    }
    public function register(Request $re)
    {
        try
        {
            $a = DB::table('reashma')->insert([
                'email1'=>$re->input('email'),
                'pwd'=>$re->input('password'),
                'gender'=>$re->input('gender'),
            ]);
            if($a == 1)
            {
                return view('login');
            }
        }
        catch(Throwable $e)
        {
            return view('login');
        }
        
        
        
    }
}
