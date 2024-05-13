<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

abstract class Controller
{
    public function register(Request $request) {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        return "You have registered Yourself";
    }
}
