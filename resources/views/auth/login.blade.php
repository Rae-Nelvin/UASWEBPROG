@extends('layouts.guest')
@section('content')
    <div class="flex flex-row justify-center my-16">
        <div class="flex flex-col w-1/4 border-gray-200 border py-8 px-6">
            <h1 class="font-bold text-3xl text-center">Log in</h1>
            <form action="{{ route('login') }}" class="mt-8 flex flex-col space-y-6" method="POST">
                @csrf
                <div class="flex flex-col space-y-1">
                    <input type="email" name="email"
                        class="w-full rounded-md border-[1px] border-[#676767] py-3 px-2 font-normal text-base"
                        placeholder="Email">
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col space-y-1">
                    <input type="password" name="password"
                        class="w-full rounded-md border-[1px] border-[#676767] py-3 px-2 font-normal text-base"
                        placeholder="Password">
                    @error('password')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-row items-center">
                    <input type="checkbox" name="remember" class="font-normal text-base mr-2 rounded-sm">Keep me signed in
                </div>
                <button
                    class="mt-9 w-full bg-[#067A46] text-white text-base font-bold py-3 rounded-md hover:bg-[#157248] transition-colors duration-300 ease-in-out">Log
                    In</button>
            </form>
            <p class="text-base font-normal text-center mt-14">Don't have an account? <a href="{{ route('register') }}"
                    class="text-[#067A46]">Sign up</a></p>
        </div>
    </div>
@endsection
