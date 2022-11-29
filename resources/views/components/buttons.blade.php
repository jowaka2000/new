 {{-- adding items --}}
@can('viewAny', \App\Models\Post::class)
<a href="{{ route('post.create') }}"
class="fixed right-6 md:right-10 bottom-28 rounded-full bg-green-500 p-2 hover:bg-green-600">
<span class="text-gray-300">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="w-9 h-9">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>

</span>
</a>
@endcan

{{-- message --}}
<a href="" class="fixed right-6 md:right-10 bottom-10 rounded-full bg-green-500 hover:bg-green-600 p-2">
 <span class="text-gray-300 items-center">
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
         stroke="currentColor" class="w-9 h-9">
         <path stroke-linecap="round" stroke-linejoin="round"
             d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
     </svg>
 </span>
</a>
