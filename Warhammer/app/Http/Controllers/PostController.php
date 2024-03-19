<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function blockNonUser(Post $post){
        if(auth()->user()->id !== $post['user_id']){
            return redirect('/');
        }
    }

    public function deletePost(Post $post){
        if(auth()->user()->id === $post['user_id']){
            $post->delete();
        }
        return redirect('/');
    }

    public function updatePost(Post $post, Request $request){
        $this->blockNonUser($post);
        $input_fields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $input_fields['title'] = strip_tags($input_fields['title']);
        $input_fields['body'] = strip_tags($input_fields['body']);

        $post->update($input_fields);
        return redirect('/');

    }

    /** Performs the lookup in DB automatically based on the route num */
    public function editPost(Post $post){
        $this->blockNonUser($post);
        return view('edit_post',['post'=>$post]);
    }

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
