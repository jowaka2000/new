@extends('layouts.app')

@section('title', 'create post')

@section('content')
<div>
    <a href="{{route('home')}}" class="flex items-center text-gray-600 font-bold px-5 py-5 hover:text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
          </svg>

          <span class="text-xl mb-1">Back</span>
        </a>
</div>

    <div class="flex w-full justify-center py-4 px-4">
        <form action="{{route('post.edit')}}" method="POST" class="w-full md:w-7/12 space-y-4 border px-10 py-5 border-slate-200" enctype="multipart/form-data">
            <div class="text-gray-700 text-xl font-semibold md:text-2xl flex justify-center w-full">ADD ITEM</div>


            @include('components.create-post-form')

            <div class="flex w-full justify-end">
                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded text-xl">Post
                    Item</button>
            </div>
        </form>
    </div>
@endsection
