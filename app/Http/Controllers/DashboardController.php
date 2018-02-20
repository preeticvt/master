<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DashboardController extends Controller 
{
public function dash(){
return view('dash');
}


public function move(Request $request){



	//return Redirect::action('ContactController@contact');
}

}