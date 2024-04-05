@extends('layouts.app')
@section('content')
   @foreach ($products as $product)
    
    <a href="/product/update/{{$product->id}}"> Nom : {{$product->name}} </a>
   @endforeach 
<a href="/product/create">Créer un produit</a>
@endsection