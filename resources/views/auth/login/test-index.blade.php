@extends('layouts.test-auth')


@section('title','Sign up page')

@section('content')

@if (session()->has('login_message_error'))
<div class="w-full flex justify-center">
    <div class="w-11/12 md:w-8/12 bg-red-500 text-red-900 flex justify-center py-1">{{session('login_message_error')}} </div>
</div>
@endif
  <div class="w-full flex justify-center  px-10">

    <form action="{{route('login')}}" method="POST" class="space-y-4 py-3 w-full">
        <div class="flex w-full justify-center text-xl md:text-2xl font-bold text-gray-700">Login</div>

        <div>
            <label for="email" class="text-gray-700 flex items-center">Email Address</label>
            <input type="email" name="email" value="{{old('email')}}" placeholder="Enter account email address"
                class="w-full h-12 rounded bg-slate-200 border-slate-300 hover:border-slate-400 text-sm text-gray-800 @error('email') border-red-500 @enderror">

            @error('email')
                <div class="text-xs text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password" class="text-gray-700 flex items-center">Password</label>
            <input type="password" name="password" placeholder="***********"
                class="w-full h-12 rounded bg-slate-200 border-slate-300 rounded hover:border-slate-400 text-sm text-gray-800 @error('password') border-red-500 @enderror">

            @error('password')
                <div class="text-xs text-red-500">{{ $message }}</div>
            @enderror

        </div>

        <div class="flex gap-1 items-center">
            <input type="checkbox" name="remember" id="remember" class="rounded">
            <label for="remember">Remember me</label>
        </div>

        <div class="flex w-full pt-5">
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 px-4 py-1 rounded text-white font-bold text-lg">Sign In</button>
        </div>

        <div class="mt-5 w-full justify-center">
            <div class="flex w-full justify-center">
                <a href="{{route('reset-password')}}" class="flex text-sm hover:underline gap-1">
                    <span>Reset Password</span>
                    <span class="text-green-500 underline">here</span>
                </a>
            </div>


            <div class="flex w-full justify-center">
                <a href="{{route('register')}}" class="flex text-sm hover:underline gap-1">
                    <span>you don't have an account?</span>
                    <span class="text-green-500 underline">Register</span>
                </a>
            </div>
        </div>


        @csrf
    </form>


  </div>
@endsection
