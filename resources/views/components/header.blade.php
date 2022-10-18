<div class="flex gap-2 items-center">
    <img src="{{ asset('images/logo.png') }}" alt="" class="w-8 h-8 rounded-full">
    <a href="{{ route('home') }}" class="text-xl md:text-2xl font-bold text-gray-700">Centsys Enginnering </a>
</div>
<div class="flex gap-3 items-center font-medium text-gray-800">
    <div class="flex items-center gap-2">
        <span class="text-green-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 md:w-5 h-4 md:h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
        </span>
        <span class="text-sm md:text-lg border-r-2  border-gray-700 pr-3">0796802258</span>
    </div>
    {{-- big screen navbar --}}
    <div class="hidden md:flex gap-3 items-center">
        <a href="" class="text-gray-700 font-medium hover:underline hover:font-semibold">About Us</a>
        @auth
          <div>
              <select onchange="location = this.value" class="h-12 border-none bg-transparent">
                <option selected>{{auth()->user()->name}}</option>
                <option value="{{route('profile.index')}}">My Profile</option>
                <option value="{{route('logout')}}">Logout</option>
              </select>
          </div>
        @endauth
        @guest
            <a href="{{ route('login') }}"
                class="text-gray-700 font-medium hover:underline hover:font-semibold hover:text-gray-800">Login</a>
            <a href="{{ route('register') }}"
                class="bg-green-600 px-2 py-1 text-gray-200 font-medium rounded hover:bg-green-400 hover:text-gray-700">Sign
                Up</a>
        @endguest
    </div>

    {{-- Mobile screen view --}}
    <div class="flex md:hidden text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
        </svg>
    </div>
</div>
