<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">

    <div class="flex w-full justify-center px-3 md:px-8 py-10">
        <div class="flex justify-end w-full md:w-8/12">
            <a href="{{route('home')}}" class="flex text-gray-700 border border-gray-400 hover:border-red-300 hover:text-gray-900  rounded p-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 md:w-8 h-7 md:h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </a>
        </div>
    </div>

    <div class="flex w-full justify-center px-3 md:px-8 pb-10">

        <div class="w-full md:w-5/12 bg-slate-300 h-full overflow-y-auto">

            <div class="mb-3 w-full px-3 md:px-5">@yield('content')</div>

        </div>
    </div>
    </div>
</body>

</html>
