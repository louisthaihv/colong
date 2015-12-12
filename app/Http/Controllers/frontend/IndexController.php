<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Clan;
use App\Slider;
use App\Week;
use App\Article;
use App\Galary;
use App\Popup;

class IndexController extends Controller
{
    public function __construct(){

        $popup = Popup::where('status', 1)->first();
        $top_cats = Category::where('type', TOP_CAT)->where('status', 1)->get();
        $head_cats = Category::where('type', HEADER_CAT)->where('status', 1)->get();
        $bottom_cats = Category::where('type', BOTTOM_CAT)->where('status', 1)->get();
        $top_navs = Category::where('type', TOP_NAV)->where('status', 1)->get();
        $weeks = Week::all();
        view()->share('popup', $popup);
        view()->share('weeks', $weeks);
        view()->share('top_cats', $top_cats);
        view()->share('head_cats', $head_cats);
        view()->share('bottom_cats', $bottom_cats);
        view()->share('top_navs', $top_navs);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('frontend.index.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCategory($id)
    {
        $category = Category::findOrFail($id);
        $articles = $category->articles()->where('status', 1)->paginate(PAGINATE);
        $weeks = Week::all();
        return view('frontend.categories.main')->with(compact('category', 'weeks','articles'));
    }

    public function showArticle($id){
        $article = Article::findOrFail($id);
        $news = Article::where('id', '>', $article->id)->orderBy('id', 'DESC')->take(NEW_OLD_ARTICLE);
        $olds = Article::where('id', '<', $article->id)->orderBy('id', 'DESC')->take(NEW_OLD_ARTICLE);
        return view('frontend.articles.main')->with(compact('news','article', 'olds'));
    }
}
