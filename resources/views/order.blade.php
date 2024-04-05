@extends('layouts.app')

@section('content')
<main>
    <div>
        <h1 class="flex justify-center py-4 font-bold text-2xl">Récapitulatif de la commande</h1>
    <article class="border border-gray-400 border-3 shadow-xl rounded-lg p-3 m-3 gap-4 flex flex-col w-1/3 ">
          <div class="flex justify-between mx-4 mb-4 font-bold text-xl text-black">Numéro de commande : {{$orders->id}}</div>
          <div class="flex justify-between mx-4 mb-4 text-black">Status : {{$orders->status}} </div>
          <div class="flex justify-between mx-4 mb-4 text-black">
            Commande :
            <div>
          
            <ul>
                <li>{{$orders->commande}}</li>
            </ul>
            
          
            </div>
          </div>
          
          
    </article>
    
        <form action="/order/checkout" method="POST">
            @csrf
            <button type="submit" class="w-1/4 flex  mx-4 mb-4 bg-gray-600 border border-transparent rounded-md shadow-sm py-4 px-4 justify-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 ">Payer</button>
        </form>
    </div>
</main>
@endsection