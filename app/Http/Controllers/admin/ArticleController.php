<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Category;
use Auth;
use App\Http\Controllers\BaseController;

class ArticleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $articles = Article::paginate(PAGINATE);
        $categories = Category::all();
        $cate_id = -1;
        return view('admin.articles.index')->with(compact('articles', 'categories', 'cate_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create')->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $article = Article::firstOrCreate(['title'=> $data['title'], 'category_id'=>$data['category_id'], 'user_id'=>\Auth::user()->id]);
        $article->content = $data['content'];
        $article->status = (int)$data['status'];
        $article->save();
        $path = 'images/articles/article'.$article->id.'/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $article->image_url = $path.$name;
            $article->save();
        }

        return redirect()->route('admin.articles.show', $article->id)->with(['message'=>'success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.show')->with(compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        return view('admin.articles.edit')->with(compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');

        if($request->hasFile('image_url')){
            $article = Article::findOrFail($id);
            $path = 'images/articles/article'.$id.'/';
            $destinationPath = public_path($path);
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $article->image_url = $path.$name;
            $article->save();
        }
        else{
            $article = Article::where('id',$id)->update($data);
        }

        return redirect()->route('admin.articles.show', $id)->with(['message'=>'update success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.articles.index')->with(['message'=>'delete success']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchArticleByCate(Request $request)
    {
        $cate_id = $request->get('category_id');
        $category = Category::findOrFail($cate_id);
        $categories = Category::all();
        $articles = $category->articles()->orderBy('category_id', 'ASC')->paginate(PAGINATE);
        return view('admin.articles.index')->with(compact('articles', 'categories', 'cate_id'));
    }
}
