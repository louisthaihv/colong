<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;

use App\Category;
use Auth;

class CategoryController extends BaseController
{

    public function __construct(){
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(PAGINATE);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
        $category = Category::firstOrCreate(['name'=> $data['name']]);
        $category->description = $data['description'];
        $category->type = $data['type'];
        $category->status = (int)$data['status'];
        $path = 'images/categories/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
           $request->file('image_url')->move($destinationPath, $name);
           $category->image_url = $path.$name;
        }
        $category->save();

        return redirect()->route('admin.categories.show', $category->id)->with(['message'=>'success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrfail($id);
        return view('admin.categories.show')->with(compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrfail($id);
        return view('admin.categories.edit')->with(compact('category'));
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
        $data = $request->except('_token');
        $category = Category::findOrfail($id);
        $category->description = $data['description'];
        $category->type = $data['type'];
        $category->status = (int)$data['status'];
        $path = 'images/categories/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
           $request->file('image_url')->move($destinationPath, $name);
           $category->image_url = $path.$name;
        }
        $category->save();

        return redirect()->route('admin.categories.show', $category->id)->with(['message'=>'Update success!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrfail($id);
        $category->delete();

        return redirect()->route('admin.categories.index')->with('message', 'Item deleted successfully.');
    }
}
