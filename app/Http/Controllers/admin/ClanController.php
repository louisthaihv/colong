<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Clan;
use Auth;

class ClanController extends BaseController
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
        $clans = Clan::paginate(PAGINATE);
        return view('admin.clans.index')->with(compact('clans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clans.create');
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
        $clan = Clan::firstOrCreate(['name'=> $data['name']]);
        $path = 'images/clans/';
        $destinationPath = public_path($path);
        if($request->hasFile('title_url')){
            $name = $request->file('title_url')->getClientOriginalName();
            $request->file('title_url')->move($destinationPath, $name);
            $clan->title_url = $path.$name;
        }
        if($request->hasFile('slide_url')){
            $name = $request->file('slide_url')->getClientOriginalName();
            $request->file('slide_url')->move($destinationPath, $name);
            $clan->slide_url = $path.$name;
        }
        if($request->hasFile('back_ground_image_url')){
            $name = $request->file('back_ground_image_url')->getClientOriginalName();
            $request->file('back_ground_image_url')->move($destinationPath, $name);
            $clan->back_ground_image_url = $path.$name;
        }
        $clan->description = $data['description'];
        $clan->name = $data['name'];
        $clan->save();

        return redirect()->route('admin.clans.show', $clan->id)->with(['message'=>'success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clan = Clan::findOrFail($id);
        return view('admin.clans.show')->with(compact('clan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clan = Clan::findOrFail($id);
        return view('admin.clans.edit')->with(compact('clan'));
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
        $clan = Clan::findOrFail($id);
        $path = 'images/clans/';
        $destinationPath = public_path($path);
        if($request->hasFile('title_url')){
            $name = $request->file('title_url')->getClientOriginalName();
            $request->file('title_url')->move($destinationPath, $name);
            $clan->title_url = $path.$name;
        }
        if($request->hasFile('slide_url')){
            $name = $request->file('slide_url')->getClientOriginalName();
            $request->file('slide_url')->move($destinationPath, $name);
            $clan->slide_url = $path.$name;
        }
        if($request->hasFile('back_ground_image_url')){
            $name = $request->file('back_ground_image_url')->getClientOriginalName();
            $request->file('back_ground_image_url')->move($destinationPath, $name);
            $clan->back_ground_image_url = $path.$name;
        }
        $clan->name = $data['name'];
        $clan->description = $data['description'];
        $clan->save();

        return redirect()->route('admin.clans.show', $clan->id)->with(['message'=>'success!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clan = Clan::findOrFail($id);
        $clan->delete();

        return redirect()->route('admin.clans.index')->with(['message'=>'Delete success!']);
    }
}
