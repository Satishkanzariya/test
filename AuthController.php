<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AuthController extends Controller
{
    public function Auth1(Request $request)
    {
        // $reqvalidation=$request->validate([
        //     'txtEmail'=> 'required|email|min:4',
        //     'txtpwd'=>'required|alpha|max:6'
        // ]);
        //  DB::table('login')->insert([
        //     'email'=>$request->input('txtEmail'),
        //     'pwd'=>$request->input('txtpwd'),
        // ]);

        // DB::table('login')
        //     ->where('email', $request->input('txtEmail'))
        //     ->update([
        //     'pwd'=>$request->input('txtpwd'),
        // ]);
        //$rec=DB::table('login')->where('email',$request->input('txtEmail'))->delete();
//   /*******************/
//         $path = $request->path();
//       echo 'Path Method: '.$path;
//       echo '<br>';

//       // Usage of is method
//       $pattern = $request->is('login/*');
//       echo 'is Method: '.$pattern;
//       echo '<br>';

//       // Usage of url method
//       $url = $request->url();
//       echo 'URL method: '.$url;
/********************* */

        // $rec=DB::table('login')->get();
        // //echo $rec;
        // return view('dispdata',compact('rec'));

        // $rec=DB::table('login')->where('email',$request->input('txtEmail'))
        // ->where('pwd',$request->input('txtpwd'))->count();
        //     if($rec==1)
        //     {
        //     $request->session()->put('Semail', $request->input('txtEmail'));
        //     return view('home');
        //     }
        //     else
        //     {

        //     return redirect('login');
        //     }
        // $data = $request->session()->all();
        // print_r($data);
//         if($request->session()->has('Semail'))
//         {
//     echo $request->session()->get('Semail');
//     $request->session()->forget('Semail');
//     echo $request->session()->get('Semail');
    
// }
// else{
// echo "no";

// }

        $rec=DB::table('login')->get();
        $arr1 = json_decode($rec);
        //return view('dispdata',compact('rec'));
        //echo $arr;
        return view('dispdata',compact('arr1'));
        //return view('dispdata')->with('leads', json_decode($rec, true));
       //return view('home');
    }
}
