<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;

class ProfileUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware(['can:users.profile']);

    }

    public function index()
    {
        return view('admin.users.profile');
    }


    public function create()
    {
        //
    }


    public function edit($id)
    {
        $user = User::where('id',$id)->firstOrFail();
        return view('admin.users.edit' , compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:4|max:20',
        ]);
        $user = User::findOrFail($id);
        $user->name = e($request->name);
        $user->save();
        return redirect()->route('users.profile.index')->with('info','Perfil Actualizado Exitosamente');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
