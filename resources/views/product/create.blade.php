@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-1/2 bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl mb-4">Création d'un produit</h1>
        <form method="POST" action="{{url('/product/create')}}" enctype="multipart/form-data">
            @csrf

            {{-- Champ nom --}}
            <div class="mb-4">
                <label for="name" class="block mb-2">Nom :</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border rounded-md px-3 py-2 w-full">
            </div>
            {{-- Message d'erreur pour le nom --}}
            @error('name')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Champ price --}}
            <div class="mb-4">
                <label for="price" class="block mb-2">Prix :</label>
                <input type="number" name="price" step="0.01" value="{{ old('price') }}" class="border rounded-md px-3 py-2 w-full">
            </div>
            {{-- Message d'erreur pour le prix --}}
            @error('price')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror


            {{-- Champ stock --}}
            <div class="mb-4">
                <label for="stock" class="block mb-2">Stock :</label>
                <input type="number" name="stock" step="1" value="{{ old('stock') }}" class="border rounded-md px-3 py-2 w-full">
            </div>
            {{-- Message d'erreur pour le stock --}}
            @error('stock')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror


            {{-- Champ image --}}
            <div class="mb-4">
                <label for="imageCreate" class="block mb-2">Image :</label>
                <input type="file" name="imageCreate" id="image" value="{{ old('image') }}" class="border rounded-md px-3 py-2 w-full">
            </div>
            {{-- Message d'erreur pour l'imaghe --}}
            @error('imageCreate')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Champ description --}}
            <div class="mb-4">
                <label for="description" class="block mb-2">Description :</label>
                <textarea name="description" class="border rounded-md px-3 py-2 w-full">{{ old('description') }}</textarea>
            </div>
            {{-- Message d'erreur pour la description --}}
            @error('description')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Champ catégories --}}
            <div class="mb-4">
                <label for="category" class="block mb-2">Catégorie :</label>
                <select name="category" class="border rounded-md px-3 py-2 w-full" required>
                    <option value="">Sélectionnez une catégorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- Message d'erreur pour les catégories--}}
            @error('category')
                <p class="text-red-500 bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            {{-- Bouton créer produit --}}
            <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 active:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer un produit</button>
        </form> 
        <a href="/category/edit" class="block mt-4 bg-green-900 hover:bg-green-800 active:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer une catégorie</a>
        {{-- Lien retour catalogue produit --}}
        <a href="/product/view" class="block mt-4 bg-blue-900 hover:bg-blue-800 active:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour catalogue produit</a>
    </div>
</div>
@endsection
