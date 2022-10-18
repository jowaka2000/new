@extends('layouts.app')


@section('content')
    <div class="flex w-full justify-between">
        <div >
            <a href="{{ route('home') }}" class="flex items-center text-gray-600 font-bold px-5 py-5 hover:text-gray-900 " title="Back">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                </svg>

                <span class="text-xl mb-1">Back</span>
            </a>
        </div>

        <div class="flex items-center gap-5 px-5">
            <a href="{{route('post.edit',$post)}}" class="flex mb-2 text-green-500 hover:text-green-700" title="Edit this post">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w- h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </a>
            <form action="">
                <button class="text-red-500 hover:text-red-700" title="Delete this post">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div class="w-full flex justify-center pb-20">
        <div class="w-9/12 space-y-5">
            <div class="relative flex w-full justify-center">
                <div class="absolute top-5 text-gray-700 font-bold">Get {{$post->title}} At Affordable price</div>
                <div class="absolute bottom-7 text-lg md:text-2xl font-black">Centsys Engineering</div>
                <img src="{{ asset('storage/posts/' . $post->postFiles->first()->file_name) }}" alt="dkljadl" title="{{$post->title.'\'s Image'}}">
            </div>
            <div class="shadow-lg py-3 px-2">
                <div class="text-xl text-gray-700 font-medium">Item Name</div>
                <div>{{ $post->title }}</div>
            </div>

            <div class="shadow-lg py-3 px-2">
                <div class="text-xl text-gray-700 font-medium">Item Price</div>
                <div>{{ $post->price == null ? '---' : 'Ksh. ' . $post->price }}</div>
            </div>

            <div class="shadow-lg py-3 px-2">
                <div class="text-xl text-gray-700 font-medium">Item Brand</div>
                <div>{{ $post->brand == 'null' ? '---' : $post->brand }}</div>
            </div>

            <div class="shadow-lg py-3 px-2">
                <div class="text-xl text-gray-700 font-medium">Item Description</div>
                <div>{{ $post->description }}</div>
            </div>


           <div class="flex w-full justify-center">
            <div class="block md:grid md:grid-cols-4 gap-0 md:gap-3">
                @foreach ($images as $image)

                    <img src="{{asset('storage/posts/'.$image->file_name)}}" class="w-[400px]"  alt="">

                @endforeach
            </div>
           </div>
        </div>
    </div>
@endsection


@section('footer')
    @include('components.footer')
@endsection
