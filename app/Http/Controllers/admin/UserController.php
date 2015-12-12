<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::paginate(PAGINATE);
        return view('admin.users.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
       return view('admin.users.create')->with(compact('roles'));
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
        $user = User::where('email', $data['email'])->first();
        if(is_null($user)){
            $user = new User;
            $user->name = $data['name']; 
            $user->email = $data['email']; 
            $user->address = $data['address']; 
            $user->phone = $data['phone']; 
            $user->birthday = $data['birthday']; 
            $user->role_id = $data['role_id']; 
            $user->status = (int)$data['status'];

            $user->save();

            return redirect()->route('admin.users.show', $user->id)->with(['message'=>'Create success']);

        }

        return redirect()->route('admin.users.create')->with(['message'=>'Email is already exist!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit')->with(compact('user', 'roles'));
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
        $user = User::where('id',$id);
        if(!is_null($user)){
            $user->update($data);
            return redirect()->route('admin.users.show', $id)->with(['message'=>'Update success!']);
        }

        return redirect()->route('admin.users.index')->with(['error'=>'can not find user']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with(['message'=>'Delete success!']);
    }
}
