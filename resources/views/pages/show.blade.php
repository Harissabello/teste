@extends('layouts.master')

@section('title')
    show
@endsection

@section('contenu')
  <h2>Détail du produit</h2>
  <hr>
  <h1>{{$produit->product_name}}</h1>
  <h2>{{$produit->product_price}}</h1>
  <p>{{$produit->product_description}}</p>
  <hr>
  <h2>{{$produit->created_at}}</h2>
  

  {{-- pour une pagination --}}
  {{-- {{$produits->links()}} --}}
@endsection

