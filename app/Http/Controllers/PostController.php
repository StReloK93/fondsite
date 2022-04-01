<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
class PostController extends Controller
{
    public function getAll(){
        return Post::all();
    }

    public function getAdd(Request $req){
        $now = Carbon::now()->format('YmdHis');


        $post = new Post;
        $post->title = $req->title;
        $post->img = $req->title;
        $post->description = $req->description;
        $post->save();


        $imgName = $post->id.$now.'.jpg';
        
        $file = $req->file;
        $file->move('images/',$imgName);
        $post->img = $imgName;
        $post->save();

        return $post;
    }
}
