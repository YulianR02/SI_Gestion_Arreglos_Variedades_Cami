<?php

namespace App\Http\Controllers;

use App\Arreglo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class misArreglosController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware(['can:misarreglos.index',
                           ]);
    }

    public function index()
    {
        $id = Auth::id();
        $misArreglos = Arreglo::where('user_id', $id)->paginate(15);
        // dd($id);
        return view('admin.arreglos.misArreglos', \compact('misArreglos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arreglo = Arreglo::where('id',$id)->with('user','image')->firstOrFail();
        return view('admin.arreglos.show', compact('arreglo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
