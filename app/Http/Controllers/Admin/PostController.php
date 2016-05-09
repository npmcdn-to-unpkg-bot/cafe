<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index')
            ->withPosts($posts);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->comments()->delete();
        $post->delete();

        Session::flash('success', 'Post was successfully deleted.');
        return redirect()->route('admin.posts.index');
    }
}