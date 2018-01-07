<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Article;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $article = Article::orderBy('created_at', 'desc')->get();
        // echo "<pre>";
        // print_r($newfeeds);
        // echo "</pre>";
        // exit();
        return view('admin.article.list',array('article'=>$article, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.article.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        
        // store
        $article = new Article;
        $article ->title        	    = Input::get('title');
        $article ->article        	    = Input::get('article');
        $article ->category             = Input::get('category');
        $article ->update               = Input::get('update');
        $article ->photo                = Input::get('photo');
        $article ->save();
        // redirect
        return Redirect::action('admin\ArticleController@index')->with('flash-success','The user has been added.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id_article)
    {
        $user = Auth::user();
        $article = Article::where('id_article', $id_article)->firstOrFail();   
        return view('admin.article.show', compact('article'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id_article)
    {
        $user = Auth::user();
        $article = Article::where('id_article', $id_article)->firstOrFail();   
        return view('admin.article.edit', compact('article'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id_article)
    {
        $article = Article::findOrFail($id_article); 
        // $newfeed ->name                = Input::get('name');
        $article ->title                = Input::get('title');
        $article ->article              = Input::get('article');
        $article ->category             = Input::get('category');
        $article ->update               = Input::get('update');
        $article ->photo                = Input::get('photo');
        $article ->save();

        return Redirect::action('admin\ArticleController@index', compact('article'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id_article)
    {
        $article = Article::where('id_article', $id_article)->firstOrFail();
        $article->delete();
        return Redirect::action('admin\ArticleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){
        $user = Auth::user();
        $search = $request->get('search');
        $article = Article::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.article.list', compact('article'),array('user' => $user));
    }
}