<?php

namespace App\Actions\Store;

use App\Http\Requests\CreatePostRequest;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class StorePostAction
{
    public function execute(CreatePostRequest $request,User $user){

        $trending=false;
        if($request->trending){
            $trending = true;
        }
       $post =  $user->posts()->create([
            'title'=>$request->title,
            'brand'=>$request->brand,
            'description'=>$request->description,
            'price'=>$request->price,
            'trending'=>$trending
        ]);


        $search_id = now()->diffInMicroseconds().$post->id.now()->diffInMilliseconds().'post #'.$post->id.now()->diffInMinutes();
        $search_id= Crypt::encrypt($search_id);

        $post->update(['search_id'=>$search_id]);

        return $post;
    }
}
