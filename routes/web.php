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
Route::get('/join', 'userinfoController@join');

//로그인 페이지
Route::get('/login', 'userinfoController@login');

//로그아웃
Route::get('/logout', 'userinfoController@logout');

//글 목록 페이지
Route::get('/list', 'boardController@list');

//글 정보 페이지
Route::get('/info', 'boardController@info');

//글 작성 페이지
Route::get('/write', 'boardController@write');

//글 수정 페이지
Route::get('/update', 'boardController@update');

//글 삭제
Route::get('/delete', 'boardController@delete');