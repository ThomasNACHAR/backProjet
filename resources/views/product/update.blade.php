@extends('layouts.app')
@section('content')
<form method="POST" action="{{url('/product/update')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{$product->name}}">
    </div>

    <div>
        <label for="price">Prix :</label>
        <input type="number" name="price" id="price" step="0.01" required>
    </div>

    <div>
        <label for="stock">Stock :</label>
        <input type="number" name="stock" id="stock" step="1" required>
    </div>

    <div>
        <label for="image">Image :</label>
        <input type="file" name="image" id="image" accept="image/*" required>
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>
    </div>

    <div>
        <label for="category">Catégorie :</label>
        <select name="category" id="category" required>
            <option value="">Sélectionnez une catégorie</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Soumettre</button>
</form> 
@endsection