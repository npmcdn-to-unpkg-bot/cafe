<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Post;
use App\Comment;
use Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return view('post.index');
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'summary' => 'required|max:255',
            'body'  => 'required'
        ));

        $post = new Post(array(
            'title' => $request->title,
            'summary' => $request->summary,
            'body' => $request->body
        ));
        Auth::user()->posts()->save($post);

        Session::flash('success', 'This post was successfully saved.');
        return redirect()->route('posts.show', $post->id);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show')->withPost($post);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit')->withPost($post);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'summary' => 'required|max:255',
            'body'  => 'required'
        ));

        $post = Post::find($id);
        $post->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'body' => $request->body
        ]);

        Session::flash('success', 'This post was successfully updated.');
        return redirect()->route('posts.show', $post->id);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('posts.index');
    }

    public function storeComment(Request $request, $postId)
    {
        $post = Post::find($postId);
        $comment = new Comment(array(
            'body' => $request->body,
            'user_id' => Auth::user()->id
        ));

        $post->comments()->save($comment);
        return redirect()->route('posts.show', $postId);
    }

    public function destroyComment($postId, $commentId)
    {
        $comment =  Post::find($postId)->comments->find($commentId);
        if ($comment->user_id == Auth::user()->id){
            $comment->delete();
            Session::flash('success', 'Comment was successfully deleted.');
            return redirect()->route('posts.show', $postId);
        }
    }
}
