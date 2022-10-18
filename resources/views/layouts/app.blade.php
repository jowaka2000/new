<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>

    @viteReactRefresh
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">
    <div class="w-full h-screen">

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


        <nav class="w-full shadow-xl px-4 md:px-8 py-3 flex justify-between items-center h-[13%]">
            @include('components.header')

        </nav>

        <div class="flex w-full justify-center px-3 md:px-8 h-[87%]">
            <div class="w-full md:w-9/12 bg-slate-300 h-full overflow-y-auto">

                <div class="mb-4">@yield('content')</div>

                <div class="w-full">@yield('footer')</div>
            </div>
        </div>
    </div>


    <script src=""></script>
</body>

</html>
