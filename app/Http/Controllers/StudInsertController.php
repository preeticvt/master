<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class StudInsertController extends Controller 
{
public function insertform(){
return view('stud_create');
} 
public function insert(Request $request){

$data = $request->session()->all();
$email = $request->input('email');
$password = $request->input('pass');
$data=array("email"=>$email,"pass"=>$password);
DB::table('student')->insert($data);
return Redirect::action('DashboardController@dash');

}
}