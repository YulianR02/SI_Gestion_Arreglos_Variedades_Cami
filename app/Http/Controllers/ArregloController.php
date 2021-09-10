<?php

namespace App\Http\Controllers;

use App\Arreglo;
use App\User;
use Illuminate\Http\Request;

class ArregloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arreglos = Arreglo::orderBy('id','DESC')->paginate(15);
        return view('admin.arreglos.index', \compact('arreglos'));
    }


    public function create()
    {
        $usuarios = User::orderBy('name','ASC')->pluck('name','id');
        return view('admin.arreglos.create', \compact('usuarios'));
    }

    public function store(Request $request)
    {
        //create register arreglo
        $request->validate([
            'DescripcionArreglo'=>'required|min:10',
            'user_id'=>'required|integer',
            'ValorArreglo'=>'required|numeric',
            'FechaEntrega'=>'required',
            'EstadoArreglo'=>'required',
            'NombreReclama'=>'required|min:4|max:30',
            'TelefonoReclama'=>'required|numeric',
            'image'=>'image|required',

        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $nombre = time().$image->getClientOriginalName();
            $ruta = public_path().'/images/';
            $image->move($ruta,$nombre);
            $urlimage['url']='/images/'.$nombre;
        }
        $arreglo = new Arreglo;
        $arreglo->user_id = e($request->user_id);
        $arreglo->DescripcionArreglo= e($request->DescripcionArreglo);
        $arreglo->ValorArreglo = e($request->ValorArreglo);
        $arreglo->FechaEntrega = e($request->FechaEntrega);
        $arreglo->EstadoArreglo = e($request->EstadoArreglo);
        $arreglo->NombreReclama = e($request->NombreReclama);
        $arreglo->TelefonoReclama = e($request->TelefonoReclama);
        $arreglo->save();
        if($request->hasFile('image')){
            $arreglo->image()->create($urlimage);
        }
        return redirect()->route('arreglos.index')->with('info','Arreglo creado exitosamente');
    }


    public function show( $id)
    {

        $arreglo = Arreglo::where('id',$id)->with('user','image')->firstOrFail();
        return view('admin.arreglos.show', compact('arreglo'));
    }


    public function edit( $id)
    {
        $arreglo = Arreglo::where('id',$id)->firstOrFail();
        $usuarios = User::orderBy('name','ASC')->pluck('name');
        return view('admin.arreglos.edit', \compact('arreglo','usuarios'));
    }


    public function update(Request $request,  $id)
    {
        //create register posts
        $request->validate([
            'DescripcionArreglo'=>'required|min:10',
            'user_id'=>'required|integer',
            'ValorArreglo'=>'required|numeric',
            'FechaEntrega'=>'required',
            'EstadoArreglo'=>'required',
            'NombreReclama'=>'required!min:4|max:30',
            'TelefonoReclama'=>'required|numeric',
            'image'=>'image|required',

        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $nombre = time().$image->getClientOriginalName();
            $ruta = public_path().'/images/';
            $image->move($ruta,$nombre);
            $urlimage['url']='/images/'.$nombre;
        }
        $arreglo = Arreglo::findOrFail($id);
        $arreglo->user_id = e($request->user_id);
        $arreglo->DescripcionArreglo= e($request->DescripcionArreglo);
        $arreglo->ValorArreglo = e($request->ValorArreglo);
        $arreglo->FechaEntrega = e($request->FechaEntrega);
        $arreglo->EstadoArreglo = e($request->EstadoArreglo);
        $arreglo->NombreReclama = e($request->NombreReclama);
        $arreglo->TelefonoReclama = e($request->TelefonoReclama);
        $arreglo->save();
        if($request->hasFile('image')){
            $arreglo->image()->create($urlimage);
        }
        return redirect()->route('arreglos.index')->with('info','Arreglo editado exitosamente');
    }

    public function destroy( $id)
    {
        $arreglo = Arreglo::findOrFail($id)->delete();
        return back()->with('info','Arreglo Eliminada Exitosamente');
    }
}
