<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        //Creation list of products
        $users = User::orderBy('id','DESC')->paginate(15);
        return view('admin.users.index', \compact('users'));
    }

    public function create()
    {
        
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        //create register posts
        $request->validate([
            'name'=>'required|unique:users|min:4|max:60',
            'email'=>'required|unique:users|email|max:255',
        ]);
        $user = new User;
        $user->name= e($request->name);
        $user->email= e($request->email);
        $user->password =Hash::make(Str::random(16)) ;
        $user->save();
        return redirect()->route('users.index')->with('info','Usuario Creado Exitosamente');


        
        return view('admin.users.create');
    }

    public function destroy($id)
    {
        //create for delete products
        $users = User::findOrFail($id)->delete();
        return back()->with('info','Usuario Eliminada Exitosamente');

    }
}
