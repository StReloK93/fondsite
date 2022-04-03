<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

use Str;
class PostController extends Controller
{
    public function getAll(){
        $allPosts = Post::paginate(12);

        foreach ($allPosts as $key => $value) {
            $value->created =  Carbon::parse($value->created_at)->format('Y-m-d');
            $value->title =  Str::limit($value->title, 18, $end=' ...');
        }
        return $allPosts;
    }

    public function addPost(Request $req){
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

    public function getPost($id){
        $post = Post::where('id', $id)->first();
        $post->created = Carbon::parse($post->created_at)->format('Y-m-d');
        $post->updated = Carbon::parse($post->updated_at)->format('Y-m-d');
        return $post;
    }


    public function editPost($id, Request $req){
        return $req->all();
    }

    public function deletePost($id){
        return Post::where('id', $id)->delete();
    }

}
