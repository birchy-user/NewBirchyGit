<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        //dd($user);
        $user = User::findOrFail($user); 

        return view('profiles/index', [ //passing in an array
            'user' => $user,
        ]);
    }

    public function edit(\App\User $user)
    {
        return view('profiles/edit', [
            'user' => $user,
        ]);
    }
}
