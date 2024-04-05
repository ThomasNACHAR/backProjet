@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-1/2 bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl mb-4">Modification de {{$product->name}}</h1>

        <form method="POST" action="{{ url('/update/'.$product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Champ nom --}}
            <div class="mb-4">
                <label for="name" class="block mb-2">Nom :</label>
                <input type="text" name="name" id="name" value="{{$product->name}}" class="border rounded-md px-3 py-2 w-full">
            </div>
            {{-- Message d'erreur pour le nom --}}
            @error('name')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Champ prix --}}
            <div class="mb-4">
                <label for="price" class="block mb-2">Prix :</label>
                <input type="number" value="{{$product->price}}" name="price" id="price" step="0.01" required class="border rounded-md px-3 py-2 w-full">
            </div>
            {{-- Message d'erreur pour le prix --}}
            @error('price')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Champ stock --}}
            <div class="mb-4">
                <label for="stock" class="block mb-2">Stock :</label>
                <input type="number" name="stock" value="{{$product->stock}}" id="stock" step="1" required class="border rounded-md px-3 py-2 w-full">
            </div>
            {{-- Message d'erreur pour le stock --}}
            @error('stock')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Champ image --}}
            <div class="mb-4">
                <label for="image" class="block mb-2">Image :</label>
                <input type="file" name="image" id="image" accept="image/*" class="border rounded-md px-3 py-2 w-full">
                <p>Image actuelle :</p>
                <img src="/images/{{$product->image}}">
            </div>


            {{-- Champ pour la description --}}
            <div class="mb-4">
                <label for="description" class="block mb-2">Description :</label>
                <textarea name="description" id="description" required class="border rounded-md px-3 py-2 w-full">{{$product->description}}</textarea>
            </div>
            {{-- Message d'erreur pour la description --}}
            @error('description')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Champ catégorie --}}
            <div class="mb-4">
                <label for="category" class="block mb-2">Catégorie :</label>
                <select name="category" id="category" required class="border rounded-md px-3 py-2 w-full">
                    <option value="">Sélectionnez une catégorie</option>
                    @foreach ($categories as $category)
                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- Message d'erreur pour les catégories --}}
            @error('category')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Bouton enregistrer modification --}}
            <button type="submit" class="bg-green-500 hover:bg-green-700 active:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
        </form> 
        <a href="/product/view" class="block mt-4 bg-blue-900 hover:bg-blue-800 active:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour catalogue produit</a>
    </div>
</div>

{{-- Formulaire de suppression --}}
<div class="flex justify-center">
    <form method="post" action="{{url('/delete/'.$product->id)}}" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        {{-- Bouton supprimer produit --}}
        <button type="submit" class="bg-red-500 hover:bg-red-700 active:bg-red-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Supprimer</button>
    </form>
</div>
@endsection
