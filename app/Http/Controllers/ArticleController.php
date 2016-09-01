<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Auth;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles');
    }

    public function add_article()
    {
        return view('add-article');
    }    

    public function create(Request $request)
    {
        $art = new Article;
        $art->title = $request->input('article_title');
        $art->description = $request->input('article_description');
        //$art->created_at = getdate();
        $art->save();
        return redirect()->route('article.add')->with('message', 'Thanks for posting!');

    } 

    
}
