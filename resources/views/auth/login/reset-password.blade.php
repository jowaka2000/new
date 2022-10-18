@extends('layouts.auth')


@section('title','Sign up page')

@section('content')

  <div class="w-full flex justify-center  px-10">

    <form action="{{route('reset-password')}}" method="POST" class="space-y-4 py-3 w-full">
        <div class="flex w-full justify-center text-xl md:text-2xl font-bold text-gray-700">Reset Password</div>

        <div>
            <label for="email" class="text-gray-700 flex items-center">Email Address</label>
            <input type="email" name="email" value="{{old('email')}}" placeholder="Enter account email address"
                class="w-full h-12  rounded bg-slate-200 border-slate-300 hover:border-slate-400 text-sm text-gray-800 @error('email') border-red-500 @enderror">

            @error('email')
                <div class="text-xs text-red-500">{{ $message }}</div>
            @enderror
        </div>


        <div class="flex w-full pt-5">
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 px-4 py-1 rounded text-white font-bold text-lg">Confirm Email</button>
        </div>

        <div class="mt-5 w-full justify-center">

            <div class="flex w-full justify-center">
                <a href="{{route('login')}}" class="flex text-sm hover:underline gap-1 text-green-800">
                    <span>Login Instead!</span>
                </a>
            </div>
        </div>


    </form>


  </div>
@endsection
