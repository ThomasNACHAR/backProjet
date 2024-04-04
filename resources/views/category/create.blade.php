@extends('layouts.app')
@section('content')

<form method="post" action="{{url('/category/create')}}">
    @csrf
    <label for="name">Nom : </label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <p class="errorMessage">{{ $message }}</p>
    @enderror
    <label for="description">Description : </label>
    <textarea name="description">{{old('description')}}</textarea>

    <br><br>
    <input type="submit" name="submit" value="Créer une catégorie">
    <br><br>
</form>


@endsection