@extends('layouts.guest')
@section('content')
    <div class="flex flex-col w-1/2 my-12 mx-32">
        <h1 class="font-semibold text-[40px] text-[#41A430]">Profile</h1>
        <div class="flex flex-row w-full justify-center mt-4 mb-6">
            <img src="{{ asset('storage/' . $user->display_picture_link ) }}" alt="{{ $user->first_name . $user->last_name }}" class="rounded-full w-[150px] h-[150px]">
        </div>
        <form action="#" method="POST" enctype="multipart/form-data" class="flex flex-col space-y-4">
            @csrf
            <div class="flex flex-col space-y-1">
                <label for="First Name" class="font-normal text-base text-[#87898E]">First Name</label>
                <input type="text" name="first_name" class="w-full border border-[#DFDFE6] rounded-lg p-4" value="{{ $user->first_name }}">
                @error('first_name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-1">
                <label for="Last Name" class="font-normal text-base text-[#87898E]">Last Name</label>
                <input type="text" name="last_name" class="w-full border border-[#DFDFE6] rounded-lg p-4" value="{{ $user->last_name }}">
                @error('last_name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-1">
                <label for="Email" class="font-normal text-base text-[#87898E]">Email</label>
                <input type="text" name="email" class="w-full border border-[#DFDFE6] rounded-lg p-4" value="{{ $user->email }}">
                @error('email')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col text-[#676767] font-normal text-base space-y-2 ml-2">
                <label for="Gender">Gender: </label>
                <div class="flex flex-row justify-between w-1/3 items-center">
                    <div class="flex flex-row space-x-2 items-center">
                        <input type="radio" name="gender_id" class="mr-2" value="1">Female
                    </div>
                    <div class="flex flex-row space-x-2 items-center">
                        <input type="radio" name="gender_id" class="mr-2" value="2">Male
                    </div>
                </div>
                @error('gender_id')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-1">
                <label for="Role" class="font-normal text-base text-[#87898E]">Role</label>
                <input type="text" name="role_id" class="w-full border border-[#DFDFE6] rounded-lg p-4" disabled value="{{ $user->role->role_name }}">
            </div>
            <div class="flex flex-col space-y-1">
                <label for="Display Picture" class="font-normal text-base text-[#87898E]">Display Picture</label>
                <input type="file" name="display_picture_link" class="w-full border border-[#DFDFE6] rounded-lg p-4">
                @error('display_picture_link')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-1">
                <label for="Password" class="font-normal text-base text-[#87898E]">Password</label>
                <input type="password" name="password" class="w-full border border-[#DFDFE6] rounded-lg p-4" disabled value="{{ $user->password }}">
            </div>
            <div class="flex flex-row justify-center">
                <button
                    class="mt-7 w-1/2 bg-[#067A46] text-white text-base font-bold py-3 rounded-md hover:bg-[#157248] transition-colors duration-300 ease-in-out">Save</button>
            </div>
        </form>
    </div>
@endsection
