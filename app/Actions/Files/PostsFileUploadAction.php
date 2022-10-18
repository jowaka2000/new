<?php

namespace App\Actions\Files;

use App\Models\Post;
use App\Models\PostFile;
use Illuminate\Support\Facades\Storage;

class PostsFileUploadAction
{
    public function execute(array $files,Post $post){

        foreach($files as $file){

            $fileName = $file->hashName();
            $fileOriginalName = $file->getClientOriginalName();
            $fileSize = $file->getSize();

            //create file table
            PostFile::create([
                'post_id'=>$post->id,
                'file_name'=>$fileName,
                'file_orginal_name'=>$fileOriginalName,
                'file_size'=>$fileSize,
            ]);

            // upload files

            Storage::putFileAs('public/posts',$file,$fileName);
        }
    }
}
