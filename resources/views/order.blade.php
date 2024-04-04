@extends('layout')

@section('content')
<main>
    <div>
    <article class="border border-gray-400 border-3 shadow-xl rounded-lg p-3 m-3 gap-4 flex flex-col w-1/3 ">
          <div class="flex justify-between mx-4 mb-4 font-bold text-xl text-black">Numéro de commande : {{$order->id}}</div>
          <div class="flex justify-between mx-4 mb-4 text-black">Status : {{$order->status}} </div>
          <div class="flex justify-between mx-4 mb-4 text-black">Composition : {{$order->commande}}
          
          </div>
          
          
    </article>
    
        <form action="/order/checkout" method="POST">
            @csrf
            <button type="submit" class="w-1/4 flex  mx-4 mb-4 bg-gray-600 border border-transparent rounded-md shadow-sm py-4 px-4 justify-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 ">Payer</button>
        </form>
    </div>
</main>
@endsection