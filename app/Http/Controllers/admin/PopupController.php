<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Popup;
use Auth;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $popups = Popup::paginate(PAGINATE);
        return view('admin.popups.index')->with(compact('popups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.popups.create');
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
        $popup = new Popup;
        $path = 'images/popups/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $popup->image_url = $path.$name;
        }
        $popup->link_popup = $data['link_popup'];
        $popup->status = (int)$data['status'];
        $popup->save();

        return redirect()->route('admin.popups.show', $popup->id)->with(['message'=>'success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $popup = Popup::findOrFail($id);
        return view('admin.popups.show')->with(compact('popup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $popup = Popup::findOrFail($id);
        return view('admin.popups.edit')->with(compact('popup'));
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
        $popup = Popup::findOrFail($id);
        $path = 'images/popups/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $popup->image_url = $path.$name;
        }
        $popup->link_popup = $data['link_popup'];
        $popup->status = (int)$data['status'];
        $popup->save();

        return redirect()->route('admin.popups.show', $popup->id)->with(['message'=>'success!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popup = Popup::findOrFail($id);
        $popup->delete();

        return redirect()->route('admin.popups.index')->with(['message'=>'Delete success!']);
    }
}
