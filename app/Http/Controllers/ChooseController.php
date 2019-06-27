<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function display($id)
    {
        return view('/choose/{$id}');
    }
}
