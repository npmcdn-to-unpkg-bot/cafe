<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['edit', 'update']]);
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
        if(Auth::user()->id == $id){
            $user = User::find($id);
            return view('profile.edit')->withUser($user);
        }
        else{
            Session::flash('error', 'Profile not belong to you.');
            return redirect()->route('profile.show', $id);
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->id == $id){
            $this->validate($request, array(
                'name' => 'required|max:25',
                'email' => 'required|email',
                'password' => 'min:6|confirmed',
                'current_password' => 'required'
            ));

            $user = User::find($id);

            if(Hash::check($request->current_password, $user->password)){
                if($request->email != $user->email){
                    $this->validate($request, array(
                        'email' => 'unique:users'
                    ));
                }

                $dataUpdate = array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'avatar' => $request->avatar
                );

                if($request->password){
                    $dataUpdate['password'] = bcrypt($request->password);
                }

                $user->update($dataUpdate);

                Session::flash('success', 'Your profile was successfully updated.');
                return redirect()->route('profile.show', $id);
            }
            else{
                return redirect()->back()->withErrors([
                    'current_password' => 'Current password not match.'
                ]);
            }
        }
        else{
            Session::flash('error', 'That is not your profile');
            return redirect()->route('profile.show', $id);
        }
    }
}
