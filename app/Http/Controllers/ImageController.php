<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
class ImageController extends Controller
{
    public function upload(Request $req){
        $image = $req->file('image');
        $image->move(public_path('/images'), $image->getClientOriginalName());
        return response()->json([
            'success' => true,
            'file' => [
                'url' => URL::to('/images/'.$image->getClientOriginalName())
            ]
        ]);
    }
}
