<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Clan;
use App\Slider;
use App\Week;
use App\Article;
use App\Galary;
use App\Popup;
use App\Server;

class IndexController extends BaseController
{
    public function __construct(){

        $popup = Popup::where('status', 1)->first();
        
        $head_cats = Category::where('type', HEADER_CAT)->where('status', 1)->get();
        $bottom_cats = Category::where('type', BOTTOM_CAT)->where('status', 1)->get();
        $top_navs = Category::where('type', TOP_NAV)->where('status', 1)->get();
        $weeks = Week::all();
        view()->share('popup', $popup);
        view()->share('weeks', $weeks);
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
        $servers = Server::all();
        
        $news = Category::where('type', NEWS_CAT)->where('status', 1)->first();
        $galaries = Galary::where('status', 1)->get();
        $articles = Category::getPostAvaiable($news);
        return view('frontend.index.main')->with('news_articles', $articles)->with('news', $news)->with("galaries", $galaries)->with('servers', $servers);
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
        return view('frontend.categories.main')->with(compact('category','articles'));
    }

    public function showArticle($id){
        $article = Article::findOrFail($id);
        $news = Article::where('id', '>', $article->id)->orderBy('id', 'DESC')->take(NEW_OLD_ARTICLE);
        $olds = Article::where('id', '<', $article->id)->orderBy('id', 'DESC')->take(NEW_OLD_ARTICLE);
        return view('frontend.articles.main')->with(compact('news','article', 'olds'));
    }

    public function showClan(){
        $clans = Clan::all();
        return view('frontend.clans.main')->with(compact('clans'));
    }

    public function detailClan($id){
        $clan = Clan::findOrFail($id);
        $clans = Clan::whereNotIn('id', [$id])->get();
        return view('frontend.clans.show')->with(compact('clan','clans'));
    }
}
