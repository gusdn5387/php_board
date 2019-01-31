<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\board;
use App\Http\Requests\BoardRequest;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boards = board::with('user_id','title','uid','created_at')->latest()->paginate(10);

        return view('board.index', compact('boards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $board = new board;
        
        return view('board.create', compact('board'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BoardRequest $request)
    {
        var_dump($request);
        $board = board::create($request->all());
        flash()->success(trans('board.index'));

        return redirect(route('board.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $board = board::with('user_id','uid','title','content','created_at')->findOrFail($id);
        
        return view('board.show', compact('board'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $board = board::findOrFail($id);

        return view('board.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BooardRequest $request, $id)
    {
        $board = Board::findOrFail($id);
        $board->update($request->except('_token', '_method'));
        flash()->success('<script>alert("글 수정 완료")</script>');
        
        return redirect(route('board.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        board::findOrFail($id)->delete();
        flash()->success('<script>alert("글 삭제 완료")</script>');

        return redirect(route('board.index'));
    }
}
