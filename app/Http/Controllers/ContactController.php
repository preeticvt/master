<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
//use App\Product as Product;
use App\Data;
use PDF; 


class ContactController extends Controller 
{
public function contactform( Request $request){


	$data = Data::all();
        view()->share('data',$data);
        if($request->has('Download')){
            $pdf = PDF::loadView('contact');
            return $pdf->download('contactform');
        }
return view('contact');
} 
public function contact(Request $request){


$value = $request->session()->get('key');
$name = $request->input('name');
$email = $request->input('email');
$age = $request->input('age');
$date = $request->input('date_order');
$mobile = $request->input('mobile');
$file = $request->input('profileimg');
$gender= $request->input('Gender');

$data1=array("name"=>$name,"email"=>$email,"age"=>$age,"date"=>$date,"mobile"=>$mobile,"file"=>$file,"gender"=>$gender);
DB::table('contact')->insert($data1);
 





 

//
echo "data inserted sucessfully";
    echo "<br>";
     echo "<a href ='logout'>logout</a>";




}
public function getLogout()
    {
        $this->logout();

        Session::flush();

       return redirect('/insert');
    }


    



//public function upload(Request $request){

/* Image Format Validation */

     
    

   // }

}