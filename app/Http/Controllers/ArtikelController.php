<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Auth;
use App\Article;


class ArtikelController extends Controller {

    public function index() {

        return view("artikel-page.index");
    }

    public function home() {

        return view("artikel-page.home");
    }

    public function isi() {

        return view("artikel-page.isi");
    }

    public function show($id_article)
    {
        $user = Auth::user();
        $article = Article::where('id_article', $id_article)->firstOrFail();   
        // echo "<pre>";
        // print_r($artikel);
        // echo "</pre>";
        // exit();
        return view('artikel-page.isi', compact('article'),array('user' => $user));
    }
}