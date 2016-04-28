<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(12);
        return view('post.index')->withPosts($posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'cover'  => 'required',
            'summary' => 'required|max:255',
            'body'  => 'required'
        ));

        $post = new Post(array(
            'title' => $request->title,
            'cover' => $request->cover,
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
            'cover' => $request->cover,
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
        if($request->ajax()){
            // save comment to post
            $post = Post::find($postId);
            $comment = new Comment(array(
                'body' => $request->body,
                'user_id' => Auth::user()->id
            ));
            $post->comments()->save($comment);

            // get comments response data
            $commets_response = [];
            foreach($post->comments->reverse() as $comment){
                array_push($commets_response, array(
                    'post_id' => $post->id,
                    'id' => $comment->id,
                    'body' => $comment->body,
                    'user_id' => $comment->user->id,
                    'username' => $comment->user->name,
                    'created_at' => $comment->created_at
                ));
            }

            // return json response
            return response()->json([
                'comments' => $commets_response,
                'current_user_id' => Auth::user()->id
            ]);
        }
    }

    public function destroyComment(Request $request, $postId, $commentId)
    {
        if($request->ajax()){
            $comment = Post::find($postId)->comments->find($commentId);
            if ($comment->user_id == Auth::user()->id){
                $comment->delete();

                // get comments response data
                $commets_response = [];
                $post = Post::find($postId);
                foreach($post->comments->reverse() as $comment){
                    array_push($commets_response, array(
                        'post_id' => $post->id,
                        'id' => $comment->id,
                        'body' => $comment->body,
                        'user_id' => $comment->user->id,
                        'username' => $comment->user->name,
                        'created_at' => $comment->created_at
                    ));
                }

                // return json response
                return response()->json([
                    'comments' => $commets_response,
                    'current_user_id' => Auth::user()->id
                ]);
            }
        }
    }
}
