<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // "select * from produits"
     //   $products = Product::where('id',0)->get(); // select * from products where id = 0
        return view ("products.index", compact('products'));
    }
}
