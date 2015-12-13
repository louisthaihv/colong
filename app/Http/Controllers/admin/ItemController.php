<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderby('created_at', 'DESC')->paginate(PAGINATE);
        return view('admin.items.index')->with(compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create');
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
        $item = Item::firstOrCreate(['name'=> $data['name']]);
        $path = 'images/items/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $item->image_url = $path.$name;
        }
        $item->name = $data['name'];
        $item->status = (int)$data['status'];
        $item->qualtity = $data['quantity'];
        $item->save();

        return redirect()->route('admin.item.show', $item->id)->with(['message'=>'success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::findOrfail($id);
        return view('admin.items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrfail($id);
        return view('admin.items.edit')->with('item', $item);
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
        $item = Item::findOrFail($id);
        $path = 'images/items/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $item->image_url = $path.$name;
        }
        $item->name = $data['name'];
        $item->status = (int)$data['status'];
        $item->qualtity = $data['quantity'];
        $item->save();

        return redirect()->route('admin.item.show', $item->id)->with(['message'=>'success!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrfail($id);
        $item->delete();
        return redirect()->route('admin.item.index');
    }
}
