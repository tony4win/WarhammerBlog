<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $input_fields = $request -> validate(
            [
                'name' => ['required', 'min:4','max:15'],
                'email' => ['required','email'],
                'password' => ['required', 'min:8']
            ]
        );

        $input_fields['password'] = bcrypt($input_fields['password']);
        User::create($input_fields);
        return "Success - from Controller";
    }
}
