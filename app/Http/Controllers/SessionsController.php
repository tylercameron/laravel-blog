<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd(request(['email', 'password']));
        // if (! auth()->attempt( request(['email', 'password']) ) ) {
        //     return back()->withErrors([
        //         'message' => 'Please check your username and password.'
        //     ]);
        // }

        dd($credentials);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->intended('dashboard');
            return redirect('/posts');
        }


        return back()->withErrors([
            'message' => 'Please check your username and password.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
