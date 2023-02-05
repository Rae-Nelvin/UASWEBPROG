@extends('layouts.guest')
@section('content')
    <div class="flex flex-col my-12 mx-32">
        <h1 class="font-semibold text-[40px] text-[#41A430]">Account Maintenance</h1>
        <div class="flex flex-row justify-center my-16">
            <div class="relative overflow-x-auto w-1/2">
                <table class="w-full text-xl text-left">
                    <thead class="text-2xl font-bold text-gray-700 text-center border-b-gray-300 border-b">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Account
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="bg-white">
                                <td class="px-6 py-4">
                                    {{ $user->first_name . ' ' . $user->last_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->role->role_name }}
                                </td>
                                <td class="px-6 py-4 flex flex-row justify-between">
                                    <a href="{{ route('admin.update-profile', $user->account_id ) }}" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" class="text-[#259D07] hover:text-[#398625]">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <path
                                                    d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z" />
                                                <path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3" />
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="#" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 256 256" class="text-[#DE5462] hover:text-[#802730]">
                                            <path fill="currentColor"
                                                d="M216 48h-40v-8a24.1 24.1 0 0 0-24-24h-48a24.1 24.1 0 0 0-24 24v8H40a8 8 0 0 0 0 16h8v144a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V64h8a8 8 0 0 0 0-16ZM96 40a8 8 0 0 1 8-8h48a8 8 0 0 1 8 8v8H96Zm96 168H64V64h128Zm-80-104v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0Zm48 0v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0Z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
