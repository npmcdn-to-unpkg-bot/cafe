<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use  App\Post;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['edit']]);
    }

    public function show($id)
    {
        $user = User::find($id);
        $posts = $user->posts()->paginate(12);
        return view('profile.show')
            ->withUser($user)
            ->withPosts($posts);
    }

    public function edit($id)
    {
        return view('profile.edit');
    }
}
