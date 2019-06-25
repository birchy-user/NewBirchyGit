<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
        return view('profiles/index', [ //passing in an array
            'user' => $user,
        ]);
    }
    public function edit(\App\User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles/edit', [
            'user' => $user,
        ]);
    }


    public function update(\App\User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => '',
        ]);

        auth()->user()->profile->update($data);

        return redirect('/profile/' . $user->users_id );
    }
}