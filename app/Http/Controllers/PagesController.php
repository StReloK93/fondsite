<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
class PagesController extends Controller
{
    public function page($page){
        return Pages::where('name' , $page)->first();
    }


    public function pageEdit($page, Request $req){
        $page = Pages::where('name' , $page)->first();

        $page->description = $req->description;
        $page->save();
        return $page;
    }
}
