<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//회원가입 페이지
Route::get('/join', function () {
    return view('user.join');
});

//로그인 페이지
Route::get('/login', function () {
    return view('user.login');
});

//로그아웃
Route::get('/logout', function () {
    return view('user.logout');
});

//글 목록 페이지
Route::get('/list', function () {
    return view('board.list');
});

//글 작성 페이지
Route::get('/write', function () {
    return view('board.write');
});

//글 수정 페이지
Route::get('/update', function () {
    return view('board.update');
});

//글 삭제
Route::get('/delete', function () {
    return view('board.delete');
});