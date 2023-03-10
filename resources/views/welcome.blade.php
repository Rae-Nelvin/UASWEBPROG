@extends('layouts.guest')
@section('content')
    <img src="{{ asset('logo/welcome-bg.png') }}" alt="welcome-bg" class="w-full relative">
    <div class="absolute top-1/3 flex flex-row justify-center w-full">
        <div class="flex flex-col w-full items-center">
            <h1 class="font-bold text-5xl text-center">{!! __('home.Home.Title') !!}</h1>
            <h2 class="mt-8 text-xl">{{ __('home.Home.Subtitle') }}</h2>
            <a href="{{ route('login') }}" class="mt-14 px-5 bg-[#067A46] text-white text-base font-bold py-3 rounded-md hover:bg-[#157248] transition-colors duration-300 ease-in-out">{{ __('home.Home.Button') }}</a>
        </div>
    </div>
@endsection