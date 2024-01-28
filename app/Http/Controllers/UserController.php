<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'password' => ['required', 'min:5']
        ]);
        //insert
        try {
            User::create([
                'email' => $request['email'],
                'password' => $request['password'],
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
}
