<nav class="bg-white border-b-gray-200 px-2 sm:px-4 py-2.5 rounded border-[1px]">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <div class="flex flex-row space-x-20 items-center">
            <a href="/" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="34px" height="35px" viewBox="0 0 15 15"
                    class="text-[#41A430] mr-2">
                    <path id="makiGrocery0" fill="currentColor"
                        d="M13.2 1.5s-1.391-.041-1.946.5c-.534.52-.754.918-.754 2H1.2l1.394 4.814c.003.008.01.015.013.022c.235.657.848 1.13 1.579 1.158l.013.006h6.5v.2s.001.3-.199.7c-.2.4-.3.6-1.1.6H2.9c-1 0-1 1.5 0 1.5h6.4c1.2 0 2.1-.7 2.4-1.4c.3-.7.3-1.3.3-1.3V4c0-.524.229-1 .7-1h.55a.75.75 0 0 0 0-1.5h-.05zM9.2 13c-.6 0-1 .4-1 1s.4 1 1 1s1-.4 1-1s-.4-1-1-1zm-5 0c-.6 0-1 .4-1 1s.4 1 1 1s1-.4 1-1s-.4-1-1-1z" />
                </svg>
                <span class="self-center text-base font-bold whitespace-nowrap">Amazing <br>E-Grocery</span>
            </a>
            @auth
                <a href="{{ route('user.dashboard') }}"
                    class="text-lg font-normal cursor-pointer hover:text-[#41A430]">Home</a>
                <a href="{{ route('user.cart') }}" class="text-lg font-normal cursor-pointer hover:text-[#41A430]">Cart</a>
                <a href="{{ route('user.profile') }}"
                    class="text-lg font-normal cursor-pointer hover:text-[#41A430]">Profile</a>
                @if (Auth::user()->account_id == 1)
                    <a href="{{ route('admin.account-maintenance') }}" class="text-lg font-normal cursor-pointer hover:text-[#41A430]">Account
                        Maintenance</a>
                @endif
            @endauth
        </div>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:flex md:w-auto md:flex-row md:space-x-5" id="navbar-default">
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        class="py-3 px-8 cursor-pointer border-[1px] border-[#067A46] text-[#067A46] text-base font-bold rounded-md hover:bg-[#067A46] hover:text-white transition-all duration-300 ease-in-out">Logout</button>
                </form>
            @else
                <a href="{{ route('register') }}"
                    class="py-3 px-8 cursor-pointer border-[1px] border-[#067A46] text-[#067A46] text-base font-bold rounded-md hover:bg-[#067A46] hover:text-white transition-all duration-300 ease-in-out">Register</a>
                <a href="{{ route('login') }}"
                    class="py-3 px-8 cursor-pointer border-[1px] border-[#067A46] text-[#067A46] text-base font-bold rounded-md hover:bg-[#067A46] hover:text-white transition-all duration-300 ease-in-out">Log
                    in</a>
            @endauth
        </div>
    </div>
</nav>
