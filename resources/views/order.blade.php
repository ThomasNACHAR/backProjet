@extends('layout')

@section('content')
<main>
    <div>
    <article class="border border-gray-400 border-3 shadow-xl rounded-lg p-3 m-3 gap-4 flex flex-col w-1/3 ">
          <div class="font-bold text-xl text-black">{{$order->id}}</div>
          <div class="text-black">Status : {{$order->status}} </div>
          <div class="text-black">Composition : {{$order->user_id}} </div>
          
          
    </article>
        <form action="/validation">
            <button type="submit">Commander</button>
        </form>
    </div>
</main>
@endsection