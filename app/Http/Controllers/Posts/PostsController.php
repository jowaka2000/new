<?php

namespace App\Http\Controllers\Posts;

use App\Actions\Files\PostsFileUploadAction;
use App\Actions\Store\StorePostAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use App\Models\PostFile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth'])->except('index');
    }
    public function index(){

        $post = Post::find(1);

        $trending = Post::trendingPosts();
        $posts = Post::allPosts();
        return view('posts.test-index',compact('posts','trending'));
    }

    public function create(){
        $post = new Post();
        return view('posts.create',compact('post'));
    }



    public function store(CreatePostRequest $request,StorePostAction $storePostAction,PostsFileUploadAction $postsFileUploadAction){

        $post = $storePostAction->execute($request,auth()->user());


        if($request->has('images')){
            $postsFileUploadAction->execute($request->file('images'),$post);
        }

        return back()->with('post_message','You have successfully added an item.');
    }


    public function show(Post $post){
        $images = PostFile::where('post_id',$post->id)->get();
        return view('posts.show',compact('post','images'));
    }
    public function edit(Post $post){
        return view('posts.edit',compact('post'));
    }

    public function logout(){

    }


}
