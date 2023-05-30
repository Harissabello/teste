<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function create(){
    return view ('pages.create');
   }

   public function saveProduct(Request $request){
    $product = new Product();
    $product->product_name = $request->input ('product_name');
    $product->product_price = $request->input ('product_price');
    $product->product_description = $request-> input ('product_description');

    $product->save();
    // page précédente
    // return back();
    return redirect('/services')->with('status', 'Le produit '.$request->input('product_name').' a été ajouté avec succès!!');

   }
}
