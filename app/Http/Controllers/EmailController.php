<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use Carbon;
use App\Users;


class EmailController extends Controller 
{
    //dd(config('app.mail_host'));
public function sendmail(){
return view('email');
} 

public function sendPasswordResetToken(Request $request)
{
    $user = User::where ('email', $request->email)-first();
    if ( !$user ) return redirect()->back()->withErrors(['error' => '404']);

    //create a new token to be sent to the user. 
    DB::table('password_resets')->insert([
        'email' => $request->email,
        'token' => str_random(60), //change 60 to any length you want
        'created_at' => Carbon::now()
    ]);

    $tokenData = DB::table('password_resets')
    ->where('email', $request->email)->first();

   $token = $tokenData->token;
   $email = $request->email; // or $email = $tokenData->email;

   /**
    * Send email to the email above with a link to your password reset
    * something like url('password-reset/' . $token)
    * Sending email varies according to your Laravel version. Very easy to implement
    */
}

//public function showPasswordResetForm($token)
 //{
     //$tokenData = DB::table('password_resets')
     //->where('token', $token)->first();

     //if ( !$tokenData ) return redirect()->to('stud_create'); //redirect them anywhere you want if the token does not exist.
     //return view('reset');
 //}


// public function resetPassword(Request $request, $token)
 //{
     //some validation
     //...

    // $password = $request->password;
     //$tokenData = DB::table('password_resets')
     //->where('token', $token)->first();

     //$user = User::where('email', $tokenData->email)->first();
     //if ( !$user ) return redirect()->to('stud_craete'); //or wherever you want

     //$user->password = Hash::make($password);
     //$user->update(); //or $user->save();

     //do we log the user directly or let them login and try their password for the first time ? if yes 
     //Auth::login($user);

    // If the user shouldn't reuse the token later, delete the token 
    //DB::table('password_resets')->where('email', $user->email')->delete();

    //redirect where we want according to whether they are logged in or not.
 //}




}