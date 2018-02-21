<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Data;


class showController extends Controller 
{
public function showform(){
$data = Data::all ();
return view ( 'show' )->withData ( $data );
} 

	}