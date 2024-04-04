@extends('layouts.app')
@section('content')
   @foreach ($products as $product)
    Nom : {{$product->name}}   
   @endforeach 
   @foreach ($categories as $category)
     {{$category->id}}  
   @endforeach
<a href="/product/create">Créer un produit</a>
@endsection