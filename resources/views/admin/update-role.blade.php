@extends('layouts.guest')
@section('content')
    <div class="flex flex-col my-12 mx-32">
        <h1 class="font-semibold text-[40px] text-[#41A430]">Update Role</h1>
        <form action="/admin/update-profile" method="POST" class="flex flex-col mt-10 space-y-5 w-1/2">
            @csrf
            <div class="flex flex-col space-y-1">
                <label for="Name" class="font-normal text-base text-[#87898E]">Name</label>
                <input type="text" name="name" class="w-full border border-[#DFDFE6] rounded-lg p-4" disabled value="{{ $user->first_name . ' ' . $user->last_name }}">
            </div>
            <select name="role_id" class="w-full border border-black rounded-lg p-4">
                <option value="{{ $user->role->role_id }}" selected>{{ $user->role->role_name }}</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                @endforeach
            </select>
            <div class="flex flex-row justify-center">
                <button
                    class="mt-7 w-1/2 bg-[#067A46] text-white text-base font-bold py-3 rounded-md hover:bg-[#157248] transition-colors duration-300 ease-in-out">Save</button>
            </div>
        </form>
    </div>
@endsection
