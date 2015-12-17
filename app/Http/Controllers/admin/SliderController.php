<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Slider;
use Auth;

class SliderController extends BaseController
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
        $sliders = Slider::paginate(PAGINATE);
        return view('admin.sliders.index')->with(compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
        $slider = Slider::firstOrCreate(['title'=> $data['title']]);
        $path = 'images/sliders/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $slider->image_url = $path.$name;
        }
        $slider->title = $data['title'];
        $slider->save();

        return redirect()->route('admin.sliders.show', $slider->id)->with(['message'=>'success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.show')->with(compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit')->with(compact('slider'));
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
        $slider = slider::findOrFail($id);
        $path = 'images/sliders/';
        $destinationPath = public_path($path);
        if($request->hasFile('image_url')){
            $name = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move($destinationPath, $name);
            $slider->image_url = $path.$name;
        }
        $slider->title = $data['title'];
        $slider->save();

        return redirect()->route('admin.sliders.show', $slider->id)->with(['message'=>'success!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with(['message'=>'Delete success!']);
    }
}
