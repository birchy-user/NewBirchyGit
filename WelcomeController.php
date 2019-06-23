<?php

#this is a comment i guess

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

class WelcomeController extends Controllers
{
    public function index($lang)
    {
        App::setwelcome($lang);
        return view('welcome');
    }
}
