<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.user.index')
            ->withUsers($users);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->comments()->delete();
        $user->delete();

        Session::flash('success', 'User was successfully deleted');
        return redirect()->route('admin.users.index');
    }
}