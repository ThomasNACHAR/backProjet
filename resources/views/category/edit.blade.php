@extends('layouts.app')
@section('content')
<h1>Catégorie: </h1>
<button><a href="/category/create">Créer une catégorie</button>
@foreach ($categories as $category)
   
    <p>Nom catégorie : {{ $category->name }} <br>Description catégorie: {{ $category->description }} </p>

<!-- Bouton pour modifier une catégorie  -->
<button><a href="/category/update/{{ $category->id }}">Modifier une catégorie</button>

<!-- Formulaire pour supprimer une catégorie -->
<form action="{{ url('/category/' . $category->id) }}" method="POST"> 
    @csrf
    @method('DELETE')
    <input type="submit" value="Supprimer la catégorie">
</form>



@endforeach





@endsection
