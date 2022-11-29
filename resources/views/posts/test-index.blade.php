@extends('layouts.app')

@section('title', env('APP_NAME'))

@section('top')
@include('components.top-component')
@endsection




@section('content')
    <div class="w-full bg-blue-500 h-full space-y-5 pb-12">
       @include('components.buttons')


        <div class="px-3 md:px-10 pt-5 b">
            <div class="text-xl text-gray-100 font-medium">Top Items</div>


            <div class="border-b"></div>
            <div class="flex w-full justify-end">
                <form>
                    <input type="text" name="search"
                        class="bg-slate-300  text-gray-700 rounded text-sm h-7 md:h-8 mt-1 border border-slate-300" placeholder="Search Item">
                </form>
            </div>

            @if (count($trending) == 0)
                <div class="text-xl w-full flex justify-center py-5 text-gray-100">No Record Yet</div>
            @endif

            <div class="pt-7 w-full block md:grid md:grid-cols-3 space-y-4 md:space-y-0 gap-0 md:gap-4 px-4 md:px-0">

                @if (count($trending) != 0)
                    @foreach ($trending as $post)
                        @include('components.item')
                    @endforeach
                @endif
            </div>
        </div>



        <div class="border-b"></div>


        <div class="px-8 md:px-10 pt-5 block md:flex w-full justify-between">
            @include('components.get-update')
        </div>

        <div class="border-b"></div>


        <div class="px-8 md:px-10">
            <div class="flex w-full justify-end">
                <form action="">
                    <input type="text" class="h-7 bg-slate-300 rounded text-sm text-gray-700"
                        placeholder="Search Itmes here">
                </form>
            </div>

            @if (count($posts) == 0)
                <div class="text-xl w-full flex justify-center py-5 text-gray-200">No Items Posted yet yet</div>
            @endif

            <div class="pt-7 w-full block md:grid md:grid-cols-3 space-y-4 md:space-y-0 gap-0 md:gap-4 px-4 md:px-0">
                @foreach ($posts as $post)
                    @include('components.item')
                @endforeach
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @include('components.footer')
@endsection
