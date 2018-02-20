<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Users;


class LoginController extends Controller
{
    public function index()
    {
         
          //insert(users)
        return view ('login');

    }



    public function store(Request $request)

    { 
    

    
    print Input::get('email');
    print Input::get('password');
    
        //$email = $request->input('email');
        //$password = $request->input('pass');
        // die();
        //$data=array('email'=>$email,"password"=>$password);
        //DB::table('users')->insert($data);


        //echo "Record inserted successfully.<br/>";

       
    
      
        
    }
}
