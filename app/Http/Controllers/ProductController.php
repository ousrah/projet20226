<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $cat_id = $request->lst_cats;

        #methode de composition
//        $products = Product::with('category');
//        if($cat_id)   $products =  $products->where('category_id',$cat_id); // "select * from produits"
//        $products = $products->get();

        #methode de redandance 'non pratique pour les grandes requetes
        // if (!$cat_id)
        //     $products = Product::with('category')->get();
        // else
        //     $products = Product::with('category')->where('category_id',$cat_id)->get();

        $products =  Product::with('category')
        ->when($cat_id,function($query) use ($cat_id)
        {
            return $query->where('category_id',$cat_id);
        })
        ->get();
        
     $categories = Category::all();
        //dd($products);
   
     
        //   $products = Product::where('id',0)->get(); // select * from products where id = 0
        return view ("products.index", compact('products','categories','cat_id'));
    }
}
