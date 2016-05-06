<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Place;
use App\Comment;
use App\User;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $places = Place::orderBy('created_at', 'desc')->paginate(12);
        return view('place.index')->withPlaces($places);
    }

    public function show($id)
    {
        $place = Place::find($id);
        $likes = $place->likes;

        $likedUsers = [];
        if(count($likes) > 0){
            $likedUsers = User::find(
                collect($likes)->map(function($like){
                    return $like->user_id;
                })->toArray()
            );
        }

        return view('place.show')
            ->withPlace($place)
            ->with('likedUsers', $likedUsers);
    }

    public function storeComment(Request $request, $placeId)
    {
        if($request->ajax()){
            // save comment to place
            $place = Place::find($placeId);
            $comment = new Comment(array(
                'body' => $request->body,
                'user_id' => Auth::user()->id
            ));
            $place->comments()->save($comment);

            // get comments response data
            $commets_response = [];
            foreach($place->comments->reverse() as $comment){
                array_push($commets_response, array(
                    'place_id' => $place->id,
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

    public function destroyComment(Request $request, $placeId, $commentId)
    {
        if($request->ajax()){
            $comment = Place::find($placeId)->comments->find($commentId);
            if ($comment->user_id == Auth::user()->id || Auth::user()->is_admin){
                $comment->delete();

                // get comments response data
                $commets_response = [];
                $place = Place::find($placeId);
                foreach($place->comments->reverse() as $comment){
                    array_push($commets_response, array(
                        'place_id' => $place->id,
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

    public function like(Request $request, $placeId){
        if($request->ajax()){
            $place = Place::find($placeId);
            $place->like();

            $likedUsers = [];
            if(count($place->likes) > 0){
                $users = User::find(
                    collect($place->likes)->map(function($like){
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
                'place_id' => $placeId,
                'like_count' => $place->likeCount,
                'liked_users' => $likedUsers
            ]);
        }
    }

    public function unLike(Request $request, $placeId){
        if($request->ajax()){
            $place = Place::find($placeId);
            $place->unlike();

            $likedUsers = [];
            if(count($place->likes) > 0){
                $users = User::find(
                    collect($place->likes)->map(function($like){
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
                'place_id' => $placeId,
                'like_count' => $place->likeCount,
                'liked_users' => $likedUsers
            ]);
        }
    }
}
