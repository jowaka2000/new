@extends('layouts.test-auth')


@section('title','Sign up page')

@section('content')

  <div class="w-full flex justify-center  px-10">

    <form action="{{route('register')}}" method="POST" class="space-y-3 py-3 w-full">
        <div class="flex w-full justify-center text-xl md:text-2xl font-bold text-gray-700">Sign Up</div>

        @include('components.create-user-form')

        <div class="flex w-full pt-5">
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 px-4 py-1 rounded text-white font-bold text-lg">Sign Up</button>
        </div>

        <div class="flex w-full justify-center text-gray-700 text-xl">Or</div>

        <div class="flex w-full">
            <a href="{{route('login')}}" class="flex justify-center bg-opacity-75 text-opacity-75 w-full bg-blue-500 hover:bg-blue-600 px-4 py-1 rounded text-white font-bold text-lg">Login</a>
        </div>

        @csrf
    </form>


  </div>
@endsection
