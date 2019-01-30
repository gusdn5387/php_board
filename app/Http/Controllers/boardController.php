<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class boardController extends Controller
{
    //글 목록 페이지
    public function list() {
        return view('board.list');
    }

    //글 작성 페이지
    public function write() {
        return view('board.write');
    }

    //글 수정 페이지
    public function update() {
        return view('board.update');
    }

    //글 삭제
    public function delete() {
        return view('board.delete');
    }
}
