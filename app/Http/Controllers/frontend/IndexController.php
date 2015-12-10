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
        view()->share('popup', $popup);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all(['id', 'name']);
        $clans = Clan::all();
        $sliders = Slider::where('status', 1)->get();
        $galaries = Galary::where('status', 1)->get();
        $weeks = Week::all();
        return view('frontend.index.main')->with(compact('galaries','categories', 'clans', 'sliders', 'weeks'));
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
        $weeks = Week::all();
        return view('frontend.articles.main')->with(compact('weeks','article'));
    }
}
