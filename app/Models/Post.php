<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function postFiles(){
        return $this->hasMany(PostFile::class);
    }




    public function getRouteKeyName()
    {
        return 'search_id';
    }

    public function scopeTrendingPosts($query){

        $query= Post::where('trending',true)->latest()->limit(4)->get();


        return $query;
    }


    public function scopeAllPosts($query){

        $query = $query->latest()->get();


        // if(Post::where('trending',true)->get()->count()==0){

        //     $query= Post::latest()->offset(4)->get();
        // }

        return $query;
    }
}
