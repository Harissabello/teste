<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PagesController extends Controller
{
    //
    public function home() {
        return view('pages.home');
    }

    public function propos() {
        return view('pages.apropos');
        
    }

    public function service() {
        $produits = Product::get();
        //pour afficher les éléménts par ordre décroissant
        // $produits = Product::orderBy('product_name','desc')->get();

// Pour les pagination afin d'afficher les éléments de la BD comme on le souhaite
        // $produits = DB::table('products')->paginate(1);
        return view('pages.services')->with('produits', $produits);
    }

    public function show($id){
        // pour afficher les détails d'un produit précis
        $produit = Product::find($id);

        // $produit = DB::table('products')->where('id', $id)->first();
        return view('pages.show')->with('produit', $produit);
    }
}
