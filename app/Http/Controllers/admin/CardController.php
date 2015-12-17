<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Http\Controllers\BaseController;

class CardController extends BaseController
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
        $cards = Card::paginate(PAGINATE);
        return view('admin.cards.index')->with('cards', $cards);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cards.create');
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
            $card = new Card;
            $card->name = $name;
            $card->save();
            return redirect()->route('admin.cards.index')->with('message', 'Thêm mới thành công');
        }
        return redirect()->route('admin.cards.index')->with('message', 'Thêm mới không thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = Card::findOrFail($id);
        return view('admin.cards.edit')->with('card', $card);
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
        $card = Card::findOrFail($id);
        $card->name = $data['name'];
        $card->save();
        return redirect()->route('admin.cards.index')->with('message', 'Update xong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = Card::findOrFail($id);
        $card->delete();
        return redirect()->route('admin.cards.index')->with('message', 'Xóa xong!');
    }
}
