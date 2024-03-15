<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function createPost(Request $request){
        $input_fields = $request -> validate([
                'title' => 'required',
                'body' => 'required'
        ]
        );

        $input_fields['title'] = strip_tags($input_fields['title']);
        $input_fields['body'] = strip_tags($input_fields['body']);
        $input_fields['user_id'] = auth()->id();

        Post::create($input_fields);
        return redirect('/');
    }
}
