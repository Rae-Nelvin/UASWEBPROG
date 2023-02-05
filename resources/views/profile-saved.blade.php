@extends('layouts.guest')
@section('content')
    <div class="flex flex-row justify-end my-20 items-center space-x-4">
        <div class="flex flex-col items-center">
            <h1 class="font-bold text-5xl text-[#41A430]">Success!</h1>
            <h2 class="mt-6 font-semibold text-4xl">We will contact you 1x24 hours</h2>
            <a href="/" class="mt-16  bg-[#067A46] py-4 px-11 text-white text-base font-bold rounded-sm hover:bg-[#157248] transition-colors duration-300 ease-in-out">Back to Home</a>
        </div>
        <img src="{{ asset('logo/profile-saved.png') }}" alt="profile-saved" class="w-[642px] h-[431px]">
        <div class="flex flex-row justify-center">
            <button
                class="mt-7 w-1/2 bg-[#067A46] text-white text-base font-bold py-3 rounded-md hover:bg-[#157248] transition-colors duration-300 ease-in-out">Save</button>
        </div>
    </div>
@endsection