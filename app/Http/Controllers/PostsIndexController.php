<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsIndexController extends Controller
{
    public function index() {

        $allPosts = Post::get();

        return view('index', ['allPosts' => $allPosts]);
    }

    public function newPost() {

        return view('addPost');
    }

    public function insertNewPost(Request $request) {

        Post::create([
            'title' => $request->post_title,
            'content' => $request->post_description
        ]);

        return redirect('/');
    }
}
