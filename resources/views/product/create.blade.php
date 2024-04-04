@extends('layouts.app')
@section('content')
<form method="POST" action="{{url('/product/create')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    @error('name')
        <p class="errorMessage">{{ $message }}</p>
    @enderror

    <div>
        <label for="price">Prix :</label>
        <input type="number" name="price"step="0.01" value="{{ old('price') }}">
    </div>
    @error('price')
        <p class="errorMessage">{{ $message }}</p>
    @enderror

    <div>
        <label for="stock">Stock :</label>
        <input type="number" name="stock" step="1" value="{{ old('stock') }}">
    </div>
    @error('stock')
        <p class="errorMessage">{{ $message }}</p>
    @enderror

    <div>
        <label for="image">Image :</label>
        <input type="file" name="image" id="image" value="{{ old('image') }}">
    </div>
    @error('image')
        <p class="errorMessage">{{ $message }}</p>
    @enderror

    <div>
        <label for="description">Description :</label>
        <textarea name="description">{{ old('description') }}</textarea>
    </div>
    @error('description')
        <p class="errorMessage">{{ $message }}</p>
    @enderror

    <div>
        <label for="category">Catégorie :</label>
        <select name="category">
            <option value="">Sélectionnez une catégorie</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    @error('category')
        <p class="errorMessage">{{ $message }}</p>
    @enderror

    <button type="submit" name="submit">Soumettre</button>
</form> 
@endsection