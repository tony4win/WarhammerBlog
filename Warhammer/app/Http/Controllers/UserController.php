<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $input_fields = $request -> validate(
            [
                'username' => ['required', 'min:4','max:15'],
                'email' => ['required','email'],
                'password' => ['required', 'min:8']
            ]
        );
        return "Success - from Controller";
    }
}
