<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Week;
use App\DailyEvent;
use Auth;

class DayController extends BaseController
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
        $events = DailyEvent::orderBy('weekly_id', 'ASC')->orderBy('start_time', 'ASC')->orderBy('end_time', 'ASC')->paginate(PAGINATE);
        return view('admin.events.index')->with(compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $weeks = Week::all();
        return view('admin.events.create')->with(compact('weeks'));
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
        $event = new DailyEvent;
        $event->start_time = $data['start_time'];
        $event->end_time = $data['end_time'];
        $event->name = $data['name'];
        $event->weekly_id = $data['weekly_id'];
        $event->save();
        return redirect()->route('admin.events.show', $event->id)->with(['message'=>'cteate success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $event = DailyEvent::findOrFail($id);
       return view('admin.events.show')->with(compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = DailyEvent::findOrFail($id);
        $weeks = Week::all();
        return view('admin.events.edit')->with(compact('event', 'weeks'));
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
        $event = DailyEvent::findOrFail($id);
        $data = $request->except('_token', '_method');
        $event->weekly_id = $data['weekly_id'];
        $event->name = $data['name'];
        $event->start_time = (int)$data['start_time'];
        $event->end_time = (int)$data['end_time'];

        $event->save();

        return redirect()->route('admin.events.show', $id)->with(['message'=>'Update success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = DailyEvent::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events.index')->with(['message'=>'Delete success']);
    }
}
