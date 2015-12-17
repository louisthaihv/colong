<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Galary;
use Auth;

class GalaryController extends BaseController
{
    public function __construct() {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $galaries = Galary::paginate(PAGINATE);
        return view('admin.galaries.index')->with(compact('galaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galaries.create');
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
        $galary = Galary::firstOrCreate(['title'=> $data['title']]);
        $path = 'images/galaries/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $galary->image_url = $path.$name;
        }
        $galary->title = $data['title'];
        $galary->status = (int)$data['status'];
        $galary->link_galaries = $data['link_galaries'];
        $galary->save();

        return redirect()->route('admin.galaries.show', $galary->id)->with(['message'=>'success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galary = Galary::findOrFail($id);
        return view('admin.galaries.show')->with(compact('galary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galary = Galary::findOrFail($id);
        return view('admin.galaries.edit')->with(compact('galary'));
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
        $galary = Galary::findOrFail($id);
        $path = 'images/galaries/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $galary->image_url = $path.$name;
        }
        $galary->title = $data['title'];
        $galary->status = (int)$data['status'];
        $galary->link_galaries = $data['link_galaries'];
        $galary->save();

        return redirect()->route('admin.galaries.show', $galary->id)->with(['message'=>'success!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galary = Galary::findOrFail($id);
        $galary->delete();

        return redirect()->route('admin.galaries.index')->with(['message'=>'Delete success!']);
    }
}
