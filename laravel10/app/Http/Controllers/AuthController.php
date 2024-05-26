<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form() {
        return view('pages.register');
    }

    public function welcome(Request $request) {
        $namadepan = $request->input('namadepan');
        $namabelakang = $request->input('namabelakang');

        return view('pages.welcome', ['namadepan' => $namadepan, 'namabelakang' => $namabelakang]);
    }
}
