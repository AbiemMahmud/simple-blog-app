<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function authLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = User::find(Auth::id());
            $user->last_login = now();
            $user->save();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors('Credentials is incorrect.');
    }

    public function signIn(Request $request)
    {
        //validate
        $credentials = $request->validate([
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required', 'min:5', 'confirmed'],
            ''
        ]);
        //insert
        try {
            User::create([
                'email' => $request['email'],
                'password' => $request['password'],
                'name' => 'User' . rand(1, 1000),
                'profile' => 'public/profile/default.jpg',
                'bio' => 'This author prefer to be misterious',
                'last_login' => now(),
                'created_at' => now()
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('/sign-in/profile');
            } else {
                return redirect('/')->withErrors('The given credentials is incorrect.');
            }
        } catch (\Illuminate\Database\QueryException $th) {
            return back()->withErrors('Unable to Sign In. Please try again.');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'username' => ['nullable', 'unique:users,name', 'max:35'],
            'bio' => ['nullable', 'max:255'],
        ]);

        try {
            $user = User::find(Auth::id());
            $username = $request->input('username');
            $bio = $request->input('bio');

            if ($bio) {
                $user->bio = $bio;
            }
            if ($username) {
                $user->name = $username;
            }
            $user->save();

            return redirect()->intended('/dashboard');
        } catch (\Illuminate\Database\QueryException $th) {
            return redirect('/dashboard')->withErrors(['Failed to set the profile']);
        }
    }

    public function setPic(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image']
        ]);

        $image = $request->file('image');

        if ($image) {
            $user = User::find(Auth::id());
            if ($user->profile !== 'public/profile/default.jpg') {
                Storage::delete($user->profile);
            }
            $path = $image->store('public/profile');
            $user->profile = $path;
            $user->save();

        }

        return response()->json(['message' => 'ok']);

    }
}
