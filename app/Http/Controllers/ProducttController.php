<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product as Product;
use PDF;
class ProducttController extends Controller
{
    public function htmltopdfview(Request $request)
    {
        $products = Product::all();
        view()->share('products',$products);
        if($request->has('download')){
            $pdf = PDF::loadView('htmltopdfview');
            
            return $pdf->download('htmltopdfview');
        }
        return view('htmltopdfview');
    }
}