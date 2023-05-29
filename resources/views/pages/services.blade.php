@extends('layouts.master')

@section('title')
    services
@endsection

@section('contenu')
  <h2>Bienvenu sur services</h2>
  
  @foreach ($produits as $produit)
    <div class="mb-3 p-2 bg-secondary">
      <h4><a class="text-white " href="">{{$produit->product_name}}</a></h4>
    </div>
  @endforeach
  {{-- pour une pagination --}}
  {{$produits->links()}}
@endsection

