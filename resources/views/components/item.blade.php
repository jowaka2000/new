<a href="{{route('post.show',$post)}}" class="w-full block bg-gray-200 border rounded p-3 border-slate-300 hover:border-slate-400">
    <div class="flex w-full justify-center">
        <img src="{{ asset('items/'.$post->postFiles->first()->file_name) }}" alt="" class="h-48">
    </div>

    <div class="text-gray-700 font-bold py-2 flex items-center justify-between">
        <span>{{$post->title}}</span>
        <span class="text-xs text-green-800">{{$post->price==null ? '' : 'Ksh. '.$post->price}}</span>
    </div>
    <div class="text-sm text-gray-800">
        {{$post->description}}
    </div>
    <div class="flex w-full justify-center pt-5">
        <button class="px-4 w-full text-green-900 py-2 bg-slate-300 hover:bg-slate-400 hover:text-gray-700">View
            Details</button>
    </div>
</a>
