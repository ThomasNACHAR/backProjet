@extends('layouts.app')
@section('content')

<form method="post" action="{{url('/update/'.$category->id)}}">
    @csrf
    <label for="name">Nom :</label>
    <input type="text" name="name" value="{{$category->name}}">
    @error('name')
    <p class="errorMessage">{{$message}}</p><br>
    @enderror
    
    <br><br>
    <label for="description">Description :</label>
    <textarea name="description">{{$category->description}}</textarea>
    @error('description')
    <p class="errorMessage">{{$message}}</p>
    @enderror
    <br><br>
   
    <br><br>
    <input type="submit" name="submit" value="Modifier">
    <br><br>
    <button><a href="/category/edit">Retour à la liste des catégories</button>
</form>



@endsection