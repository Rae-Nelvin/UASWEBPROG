@extends('layouts.guest')
@section('content')
    <div class="flex flex-col mx-32 my-8">
        <h1 class="font-semibold text-[40px] text-[#41A430]">Cart</h1>
        @if ($orders->count() == 0)
            <h1 class="text-5xl text-center font-bold">{{ __('home.No Order') }}</h1>
        @else
            <div class="grid grid-cols-6 mt-9 gap-x-7 gap-y-3">
                <p class="hidden">{{ $total_price = 0 }}</p>
                @foreach ($orders as $order)
                    <p class="hidden">{{ $total_price = $total_price + $order->item->price }}</p>
                    <div class="flex flex-col p-4 border border-gray-200 rounded-md items-center">
                        <img src="{{ asset('storage/' . $order->item->image) }}" alt="{{ $order->item->item_name }}"
                            class="w-[150px] h-[150px] rounded-md">
                        <h1 class="mt-3 font-semibold text-xl">{{ $order->item->item_name }}</h1>
                        <h2 class="mt-1 font-normal text-xl">Rp {{ $order->item->price }}</h2>
                        <a href="{{ route('user.delete-checkout', $order->order_id) }}"
                            class="mt-1 bg-[#EF4949] font-semibold text-xs py-1 px-2 hover:bg-[#e61c1c] rounded-md">Delete</a>
                    </div>
                @endforeach
            </div>
            <h1 class="text-4xl mt-48"><span class="font-semibold">Total:</span> Rp {{ $total_price }}</h1>
            <a href="{{ route('user.checkout') }}"
                class="mt-7 w-1/3 bg-[#067A46] text-white text-base font-bold py-3 text-center rounded-sm hover:bg-[#157248] transition-colors duration-300 ease-in-out">{{ __('home.Buy') }}</a>
        @endif
    </div>
@endsection
