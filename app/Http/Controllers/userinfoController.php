<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userinfoController extends Controller
{

    //로그아웃
    public function logout() {
        return view('auth.logout');
    }

}
