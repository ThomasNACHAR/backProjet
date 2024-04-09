@extends('layout')

@section('title')
Panier
@endsection

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap -mx-2">
            @foreach ($cart->items as $item)
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 mb-4 px-2">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg">
                    <img class="w-full h-56 object-cover object-center" src="{{ $item->product->image }}" alt="{{ $item->product->name }}">
                    <div class="p-4 h-auto md:h-40 lg:h-48">
                        <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">{{ $item->product->name }}</a>
                        <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                            {{ $item->product->description }}
                        </div>
                        <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:mb-0 z-20">
                            <div class="block absolute top-0 right-0 bg-blue-500 text-white px-2 py-1 text-xs font-bold rounded-bl">
                                {{ $item->product->price }} €
                            </div>
                            <div class="block absolute top-0 left-0 bg-green-500 text-white px-2 py-1 text-xs font-bold rounded-br">
                                Quantité : {{ $item->quantity }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection