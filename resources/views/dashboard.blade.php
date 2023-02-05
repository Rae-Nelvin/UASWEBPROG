@extends('layouts.guest')
@section('content')
    <div class="flex flex-col my-14 mx-16">
        <div>
            <img src="{{ asset('logo/home-bg.png') }}" alt="home-bg" class="w-full relative">
            <div class="absolute right-36 top-64">
                <h1 class="font-bold text-6xl text-white">{{ __('home.Dashboard.Title-1') }} <br></h1>
                <h1 class="font-bold text-6xl text-white mt-6">{{ __('home.Dashboard.Title-2') }}</h1>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-x-16 gap-y-12 my-20">
            @foreach ($items as $item)
                <div class="flex flex-col space-y-[10px] justify-center items-center">
                    <img src="{{ asset('storage/' . $item->image) }}"
                        alt="{{ $item->item_name }}" class="w-[200px] h-[200px] rounded-lg">
                    <h1 class="font-normal text-xl text-center">{{ $item->item_name }}</h1>
                    <a href="{{ route('user.item-detail', $item->item_id) }}"
                        class="bg-[#FFCF70] py-[2px] px-2 font-bold text-xs hover:bg-[#df9b14] transition-colors duration-300 ease-in-out rounded-sm">{{ __('home.Dashboard.More Detail') }}</a>
                </div>
            @endforeach
        </div>
        <div class="flex flex-row w-full justify-center">
            {{ $items->links() }}
        </div>
    </div>
@endsection
