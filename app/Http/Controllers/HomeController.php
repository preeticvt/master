<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('home');
    }
     public function my_frist_api()
    {
       $data = [

         'name' => 'Preeti',
         'mobile' => '1234567890',
         ' email' => 'preeti@gamil.com',

       ];
        return response()->json($data);
    }
}
