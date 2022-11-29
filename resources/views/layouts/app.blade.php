<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-blue-900">
    <div class="w-full">

        @if (session()->has('welcome_message'))
            <div class="flex w-full justify-center">
                <div class="flex w-11/12 md:w-5/12 justify-center bg-green-400 text-white">
                    {{ session('welcome_message') }}</div>
            </div>
        @endif
        @if (session()->has('post_message'))
            <div class="flex w-full justify-center">
                <div class="flex w-11/12 md:w-7/12 justify-center bg-green-400 py-1 text-white">
                    {{ session('post_message') }}</div>
            </div>
        @endif



        <nav class="">
            <div class="w-full shadow-xl px-2 md:px-8 py-5 bg-blue-500 flex justify-between items-center h-[13%]">
                @include('components.header')
            </div>
            <div class="bg-blue-500 px-3 space-y-1 pb-4" id="small_nav_bar" style="display:none;">
                <div class="text-gray-200">
                    <a href="" class="hover:underline">About Us</a>
                </div>

                @auth
                    <div class="">
                        <a href="{{ route('logout') }}"
                            class="text-gray-200 font-medium hover:underline hover:font-semibold hover:text-gray-300">Logout</a>
                    </div>
                @endauth
                @guest
                    <div class="">
                        <a href="{{ route('login') }}"
                            class="text-gray-200 font-medium hover:underline hover:font-semibold hover:text-gray-300">Login</a>
                    </div>
                    <div class="">
                        <a href="{{ route('register') }}"
                            class="py-1 text-gray-200 font-medium rounded hover:text-gray-100 text-lg hover:text-xg hover:underline">Sign
                            Up</a>
                    </div>
                @endguest
            </div>
        </nav>




        @if (request()->routeIs('home'))
            <div class="w-full bg-blue-500">
                <div
                    class="flex w-full h-24 bg-slate-300 rounded-tr-[100px] md:rounded-tr-[130px] rounded-tl-[100px] md:rounded-tl-[130px] bg-blue-900">
                </div>
            </div>
        @endif

        <div class="rounded-tr-3xl">@yield('top')</div>


        <div class="flex w-full justify-center px-3 md:px-8 h-[87%] my-16">
            <div class="w-full md:w-9/12 bg-blue-500 rounded h-full overflow-y-auto">

                <div class="mb-4">@yield('content')</div>
            </div>
        </div>

        <div class="">@yield('footer')</div>
    </div>



    <script>
        function openNavBar() {
            var btn = document.getElementById("open_naviation_menu");

            btn.addEventListener('click', function(event) {

                var navNabar = document.getElementById("small_nav_bar");

                if (navNabar.style.display == "block") {
                    navNabar.style.display = "none";
                } else {
                    navNabar.style.display = "block";
                }

            });
        }

        openNavBar();
    </script>

</body>

</html>
