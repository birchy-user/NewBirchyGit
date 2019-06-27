<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from Users');
        return view('delete',['users' => $users]);
    }

    public function destroy($id)
    {
        DB::delete('delete from Users where users_id = ?', [$id]);
        echo '<a href="/">Click here to go back to the homepage.</a>';
    }
}
