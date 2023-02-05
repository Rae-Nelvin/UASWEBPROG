@extends('layouts.guest')
@section('content')
    <div class="flex flex-row justify-end my-20 items-center space-x-4">
        <div class="flex flex-col items-center">
            <h1 class="font-bold text-5xl text-[#41A430]">{{ __('home.Checkout.Success') }}!</h1>
            <h2 class="mt-6 font-semibold text-4xl">{{ __('home.Checkout.We Contact') }}</h2>
            <a href="/" class="mt-16  bg-[#067A46] py-4 px-11 text-white text-base font-bold rounded-sm hover:bg-[#157248] transition-colors duration-300 ease-in-out">{{ __('home.Checkout.Back to Home') }}</a>
        </div>
        <img src="{{ asset('logo/checkout-success.png') }}" alt="checkout-success" class="w-[655px] h-[516px]">
    </div>
@endsection