<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function news(){
        return view('news_page');
    }

    public function single_news(){
        return view('single_news_page');
    }
}
