@extends('layouts.guest')
@section('content')
    <div class="flex flex-row justify-center my-16">
        <div class="flex flex-col w-1/4 border-gray-200 border py-4 px-6">
            <h1 class="font-semibold text-[32px] text-center">{!! __('register.title') !!}</h1>
            <form action="{{ route('register') }}" class="w-full flex flex-col mt-8 space-y-4" enctype="multipart/form-data"
                method="POST">
                @csrf
                <div class="flex flex-col space-y-1">
                    <input type="text" name="first_name"
                        class="w-full rounded-md border-[1px] border-[#676767] py-3 px-2 font-normal text-base"
                        placeholder="{{ __('register.First Name') }}">
                    @error('first_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col space-y-1">
                    <input type="text" name="last_name"
                        class="w-full rounded-md border-[1px] border-[#676767] py-3 px-2 font-normal text-base"
                        placeholder="{{ __('register.Last Name') }}">
                    @error('last_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col space-y-1">
                    <input type="email" name="email"
                        class="w-full rounded-md border-[1px] border-[#676767] py-3 px-2 font-normal text-base"
                        placeholder="Email">
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col space-y-1">
                    <select name="role_id"
                        class="w-full rounded-md border-[1px] border-[#676767] py-3 px-2 font-normal text-base">
                        <option selected>Role</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    @error('role_id')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col space-y-1">
                    <div class="flex flex-col text-[#676767] font-normal text-base space-y-2 ml-2">
                        <label for="Gender">Gender: </label>
                        <div class="flex flex-row justify-between w-1/2 items-center">
                            <div class="flex flex-row space-x-2 items-center">
                                <input type="radio" name="gender_id" class="mr-2" value="1">{{ __('register.gender.Male') }}
                            </div>
                            <div class="flex flex-row space-x-2 items-center">
                                <input type="radio" name="gender_id" class="mr-2" value="2">{{ __('register.gender.Female') }}
                            </div>
                        </div>
                    </div>
                    @error('gender_id')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col space-y-1">
                    <input type="file" name="display_picture_link"
                        class="w-full rounded-md border-[1px] border-[#676767] py-3 px-2 font-normal text-base"
                        placeholder="Display Picture">
                    @error('display_picture_link')
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
                <div class="flex flex-col space-y-1">
                    <input type="password" name="password_confirmation"
                        class="w-full rounded-md border-[1px] border-[#676767] py-3 px-2 font-normal text-base"
                        placeholder="{{ __('register.Confirm Password') }}">
                    @error('password_confirmation')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <button
                    class="mt-9 w-full bg-[#067A46] text-white text-base font-bold py-3 rounded-md hover:bg-[#157248] transition-colors duration-300 ease-in-out">{{ __('register.Submit') }}</button>
            </form>
            <p class="text-base font-normal text-center mt-3">{{ __('register.Have Account') }} <a href="{{ route('login') }}"
                    class="text-[#067A46]">Log in</a></p>
        </div>
    </div>
@endsection
