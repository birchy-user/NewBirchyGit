<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); /// guarantees that every single PostsController function MUST HAVE an authenticated user
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required', 
            'image' => 'required',
        ]);

        $PathToImage = request('image')->store('images', 'public');  /// saves the image into storage/app/public/images folder

        auth()->user()->posts()->create([

            'caption' => $data['caption'],
            'image' => $PathToImage,

        ]);  /// Grabs the authenticated user, it will go into their posts and create the post with $data fields


        /* for debugging purposes ("dumps" the post information in the web browser)
        /dd(request()->all());  */
        
        return redirect('/profile/' . auth()->user()->users_id);  /// after storing the post, the function store redirects the page to the authenticated user's profile page
                                                                  /// by grabbing the AU's users_id
    }

    public function show(\App\Post $post) // \App\Post fetches all the post automatically - tnx to Laravel
    {
        return view('posts/show',[

            'post' => $post,

        ]);
    }
}
