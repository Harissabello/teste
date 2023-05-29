<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //pour afficher les éléménts par ordre décroissant
        // $produits = DB::table('products')->orderBy('product_name','desc')->get();


        $produits = DB::table('products')->paginate(1);
        return view('pages.services')->with('produits', $produits);
    }
}
