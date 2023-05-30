@extends('layouts.master')

@section('title')
    create
@endsection

@section('contenu')

<form action="{{url('/saveProduct')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Nom du Produit</label>
      <input type="text" class="form-control" id="email" placeholder="Enter nom du produit" name="product_name">
    </div>
    <div class="form-group">
      <label for="pwd">Prix du Produit</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter prix du produit" name="product_price">
    </div>
    <div class="form-group">
        <label for="pwd">Description du Produit</label>
        <textarea type="text" name="product_description" cols="180" rows="10"></textarea>
      </div>

    <button type="submit" class="btn btn-danger">Add Produit</button>
  </form>

@endsection

