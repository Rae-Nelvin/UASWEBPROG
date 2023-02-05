@extends('layouts.guest')
@section('content')
    <div class="flex flex-row mx-32 my-16">
        <div class="flex flex-col">
            <h1 class="text-[40px] font-semibold">{{ $item->item_name }}</h1>
            <div class="flex flex-row space-x-32 mt-6">
                <img src="{{ asset('storage/' . $item->image) }}"
                    alt="{{ $item->item_name }}" class="w-[295px] h-[295px] rounded-lg">
                <div class="flex flex-col w-1/3 mt-1">
                    <h2 class="text-3xl font-semibold">Price : IDR {{ $item->price }}</h2>
                    <p class="text-xl font-normal text-justify mt-4">{{ $item->desc }}</p>
                    <form action="/user/store-cart" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->item_id }}">
                        <button
                            class="mt-24 w-full bg-[#067A46] text-white text-base font-bold py-3 rounded-sm hover:bg-[#157248] transition-colors duration-300 ease-in-out">Buy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
