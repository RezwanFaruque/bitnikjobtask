<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class WelcomePageController extends Controller
{
    
    public function index(){

        $product_limits = Product::limit(3)->get();

        $allproducts = DB::table('products')
            ->select('title', 'image')
            ->get();

        // dd($allproducts);
        return view('welcome',compact('product_limits','allproducts'));
    }
}
