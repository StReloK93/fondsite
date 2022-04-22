<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }


    public function rahbariyat($id){
        $peoples = DB::table('rahbariyat')->get();
        return view('pages.rahbariyat' , compact('peoples','id'));
    }

    public function ustav(){
        return view('pages.ustav');
    }
}
