<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('stud_create');
});

//Route::get('/Login',  'LoginController@index');
//Route::post('/store', 'LoginController@store');

//Route::get ( '/', function () {
    //$data = Data::all ();
    //return view ('show')->withData ( $data );
//});
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('dash', 'DashboardController@dash');
//Route::get('contact','ContactController@contactform');
//Route::post('store','ContactController@contact');
Route::get('show','showController@showform');
//Route::post('show','showController@show');
//Route::get('contact', 'ContactController@contact');
Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('insert','StudInsertController@insertform');
 //  forget password

//Route::get('password/reset/{token?}','Auth\ResetPasswordController@showResetForm');
//Route::post('password/email','Auth\ResetPasswordController@sendResetLinkEmail');
//Route::post('password/reset','Auth\ResetPasswordController@reset');

//Route::get('password.email','EmailController@sendmail');
//Route::post('store','ContactController@contact');
Route::get('password.email', 'EmailController@sendmail'); //I did not create this controller. it simply displays a view with a form to take the email
Route::post('password.email', 'EmailController@sendPasswordResetToken');
//Route::get('password.request/{token}', 'EmailController@showPasswordResetForm');
//Route::post('password.request/{token}', 'EmailController@resetPassword');
//Route::get('imageuploadform', 'UploadController@imageuploadform');
//Route::post('upload', 'UploadController@upload');
Route::get('/upload', ['as' => 'upload', 'uses' => 'UploadController@imageuploadform']);
Route::post('/upload', ['as' => 'upload', 'uses' => 'UploadController@upload']);
//Route::get('/store', ['as' => 'store', 'uses' => 'ContactController@contactform']);
//Route::post('/store', ['as' => 'store', 'uses' => 'ContactController@contact']);
//Route::get('/store', ['as' => 'store', 'uses' => 'ContactController@getLogout']);
Route::get('contactform',array('as'=>'contactform','uses'=>'ContactController@contactform'));

Route::post('contactform',array('as'=>'contactform','uses'=>'ContactController@contact'));

Route::get('htmltopdfview',array('as'=>'htmltopdfview','uses'=>'ProducttController@htmltopdfview'));