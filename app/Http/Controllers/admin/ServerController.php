<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Server;

class ServerController extends BaseController
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
        $servers = Server::paginate(PAGINATE);
        return view('admin.server.index')->with('servers', $servers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.server.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        if(!empty($name)){
            $server = new Server;
            $data = $request->except('_token');
            $server->name = $data['name'];
            $server->username = $data['username'];
            $server->password = $data['password'];
            $server->driver = $data['driver'];
            $server->host = $data['host'];
            $server->user_db = $data['user_db'];
            $server->game_db = $data['game_db'];
            $path = 'images/servers/';
            $destinationPath = public_path($path);
            if($request->hasFile('image')){
                $name = $request->file('image')->getClientOriginalName();
                $request->file('image')->move($destinationPath, $name);
                $server->image = $path.$name;
            }
            $server->save();
            return redirect()->route('admin.server.index')->with('message', 'Thêm mới thành công');
        }
        return redirect()->route('admin.server.index')->with('message', 'Thêm mới không thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $server = Server::findOrFail($id);
        return view('admin.server.edit')->with('server', $server);
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
        $server = Server::findOrFail($id);
        $server->name = $data['name'];
        $server->username = $data['username'];
        $server->password = $data['password'];
        $server->driver = $data['driver'];
        $server->host = $data['host'];
        $server->user_db = $data['user_db'];
        $server->game_db = $data['game_db'];
        $path = 'images/servers/';
        $destinationPath = public_path($path);
        if($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move($destinationPath, $name);
            $server->image = $path.$name;
        }
        $server->save();
        return redirect()->route('admin.server.index')->with('message', 'Update xong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $server = Server::findOrFail($id);
        $server->delete();
        return redirect()->route('admin.server.index')->with('message', 'Xóa xong!');
    }
}
