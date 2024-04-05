@extends('layouts.app')
@section('content')
<form method="POST" action="{{url('/update/'.$product->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{$product->name}}">
    </div>
    @error('name')
        <p class="errorMessage">{{ $message }}</p>
    @enderror

    <div>
        <label for="price">Prix :</label>
        <input type="number" value="{{$product->price}}" name="price" id="price" step="0.01" required>
    </div>

    <div>
        <label for="stock">Stock :</label>
        <input type="number" name="stock" value="{{$product->stock}}" id="stock" step="1" required>
    </div>

    <div>
        <label for="image">Image :</label>
        <input type="file" name="image" id="image" accept="image/*" required>
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description" value="{{$product->description}}" required></textarea>
    </div>

    <div>
        <label for="category">Catégorie :</label>
        <select name="category" id="category" required>
            <option value="">Sélectionnez une catégorie</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Soumettre</button>
</form> 
<form method="post" action="{{url('/delete/'.$product->id)}}" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
@endsection