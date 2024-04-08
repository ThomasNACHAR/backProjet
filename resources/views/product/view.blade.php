@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-2xl mb-4">Catalogue de nos produits</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($products as $product)
        <div class="container border p-4">
            <p class="font-bold">{{$product->name}}</p>
            <p class="mb-2">Prix : {{$product->price}}</p>
            <img src="/images/{{$product->image}}" class="mb-2">
            <a href="/product/update/{{$product->id}}" class="text-blue-500 hover:text-blue-700">Modifier</a>
        </div>
        @endforeach
    </div>
</div>
<div class="flex justify-center">
    <a href="/product/create" class="block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer un produit</a>
</div>
@endsection
