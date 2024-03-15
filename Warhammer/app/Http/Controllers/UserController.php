<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller{

    public function logout(){
        auth() -> logout();
        return redirect('/');
    }

    public function register(Request $request){
        $input_fields = $request -> validate(
            [
                'name' => ['required', 'min:4','max:15', Rule::unique('users','name')],
                'email' => ['required','email',Rule::unique('users', 'email')],
                'password' => ['required', 'min:8']
            ]
        );

        $input_fields['password'] = bcrypt($input_fields['password']);
        /** User Instance */
        $user = User::create($input_fields);
        /*Log In User*/
        auth() -> login($user);
        /** Redirect to Home Page */
        return redirect('/');
    }
}
