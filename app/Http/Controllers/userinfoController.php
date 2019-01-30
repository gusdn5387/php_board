<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userinfoController extends Controller
{
    //회원가입 페이지
    public function join() {
        return view('user.join');
    }

    //로그인 페이지
    public function login() {
        return view('user.login');
    }

    //로그아웃
    public function logout() {
        return view('user.login');
    }

}
