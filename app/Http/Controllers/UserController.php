<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function index()
    {
        //Creation list of products
        $users = User::orderBy('id','DESC')->paginate(15);
        return view('admin.users.index', \compact('users'));
    }
}
