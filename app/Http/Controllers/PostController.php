<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use App\Post;
use App\Comment;
use App\User;

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
            'cover'  => 'required|image',
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
        $likes = $post->likes;

        $likedUser = [];
        if(count($likes) > 0){
            $likedUsers = User::find(
                collect($likes)->map(function($like){
                    return $like->user_id;
                })->toArray()
            );
        }
        return view('post.show')
            ->withPost($post)
            ->with('likedUsers', $likedUsers);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        if(Auth::user()->id == $post->user->id || Auth::user()->is_admin) {
            return view('post.edit')->withPost($post);
        }
        else{
            Session::flash('error', 'This post not belong to you!');
            return redirect()->route('posts.show', $id);
        }
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if(Auth::user()->id == $post->user->id || Auth::user()->is_admin) {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'summary' => 'required|max:255',
                'body' => 'required'
            ));

            $post->update([
                'title' => $request->title,
                'cover' => $request->cover,
                'summary' => $request->summary,
                'body' => $request->body
            ]);

            Session::flash('success', 'This post was successfully updated.');
            return redirect()->route('posts.show', $post->id);
        }
        else{
            Session::flash('error', 'This post not belong to you!');
            return redirect()->route('posts.show', $id);
        }
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if(Auth::user()->id == $post->user->id){
            $post->comments()->delete();
            $post->delete();

            Session::flash('success', 'The post was successfully deleted.');
            return redirect()->route('posts.index');
        }
        else{
            Session::flash('error', 'This post not belong to you!');
            return redirect()->route('posts.show', $id);
        }
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
                    'user_avatar_url' => $comment->user->avatar->url('thumb'),
                    'created_at' => $comment->created_at
                ));
            }

            // return json response
            return response()->json([
                'comments' => $commets_response,
                'current_user_id' => Auth::user()->id,
                'user_is_admin' => Auth::user()->is_admin
            ]);
        }
    }

    public function destroyComment(Request $request, $postId, $commentId)
    {
        if($request->ajax()){
            $comment = Post::find($postId)->comments->find($commentId);
            if ($comment->user_id == Auth::user()->id || Auth::user()->is_admin){
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
                        'user_avatar_url' => $comment->user->avatar->url('thumb'),
                        'created_at' => $comment->created_at
                    ));
                }

                // return json response
                return response()->json([
                    'comments' => $commets_response,
                    'current_user_id' => Auth::user()->id,
                    'user_is_admin' => Auth::user()->is_admin
                ]);
            }
        }
    }

    public function like(Request $request, $postId){
        if($request->ajax()){
            $post = Post::find($postId);
            $post->like();

            $likedUsers = [];
            if(count($post->likes) > 0){
                $users = User::find(
                    collect($post->likes)->map(function($like){
                        return $like->user_id;
                    })->toArray()
                );

                foreach ($users as $user){
                    array_push($likedUsers, array(
                        'user_id' => $user->id,
                        'username' => $user->name,
                        'user_avatar_url' => $user->avatar->url('thumb')
                    ));
                }
            }

            return response()->json([
                'post_id' => $postId,
                'like_count' => $post->likeCount,
                'liked_users' => $likedUsers
            ]);
        }
    }

    public function unlike(Request $request, $postId){
        if($request->ajax()){
            $post = Post::find($postId);
            $post->unlike();

            $likedUsers = [];
            if(count($post->likes) > 0){
                $users = User::find(
                    collect($post->likes)->map(function($like){
                        return $like->user_id;
                    })->toArray()
                );

                foreach ($users as $user){
                    array_push($likedUsers, array(
                        'user_id' => $user->id,
                        'username' => $user->name,
                        'user_avatar_url' => $user->avatar->url('thumb')
                    ));
                }
            }

            return response()->json([
                'post_id' => $postId,
                'like_count' => $post->likeCount,
                'liked_users' => $likedUsers
            ]);
        }
    }
}
