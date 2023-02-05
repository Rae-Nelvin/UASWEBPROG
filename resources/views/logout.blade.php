@extends('layouts.guest')
@section('content')
    <div class="flex flex-row my-16 justify-end items-center">
        <h1 class="font-bold text-6xl text-[#41A430] mr-40">{{ __('home.Logout Success.Success') }}!</h1>
        <img src="{{ asset('logo/logout.png') }}" alt="logout" class="w-[540px] h-[491px]">
    </div>
@endsection