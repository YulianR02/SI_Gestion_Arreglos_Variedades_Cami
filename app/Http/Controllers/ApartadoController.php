<?php

namespace App\Http\Controllers;

use App\Apartado;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class ApartadoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        // $this->middleware('can:apartados.index');
        $this->middleware('can:apartados.create')->only('create');
        $this->middleware('can:apartados.edit')->only('edit','update');
        $this->middleware('can:apartados.destroy')->only('destroy');
    }

    public function index()
    {
        $apartados = Apartado::orderBy('id','DESC')->paginate(10);
        return view('admin.products.apartados.index', \compact('apartados'));
    }

    public function misApartados()
    {
        $apartados = Apartado::orderBy('id','DESC')->paginate(10);
        return view('admin.products.apartados.index', \compact('apartados'));
    }

    public function create()
    {
        $products = Product::orderBy('name','ASC')->pluck('name','id');
        return view('admin.products.apartados.create', \compact('products'));
    }


    public function store(Request $request)
    {
        $request->validate([

            'user_id'=>'required',
            'product_id'=>'required',
            'cantidadProducto'=>'required|numeric',
        ]);
        $apartado = new Apartado;
        $apartado->user_id = e($request->user_id);
        $apartado->product_id = e($request->product_id);
        $apartado->cantidadProducto = e($request->cantidadProducto);
        $apartado->save();
        return redirect()->route('products.index')->with('info','Apartado creado Exitosamente');
    }

    public function show(Apartado $apartados)
    {
        //
    }


    public function edit($id)
    {
        $apartado = Apartado::where('id',$id)->firstOrFail();
        $products = Product::orderBy('name','ASC')->pluck('name','id');
        return view('admin.products.apartados.edit', \compact('apartado','products'));
    }


    public function update(Request $request, $id)
    {
        ///create update for products
        $request->validate([
            'product_id'=>'required',
            'cantidadProducto'=>'required|numeric',
            'estadoApartado'=>'required',
        ]);
        $apartado = Apartado::findOrFail($id);
        $apartado->product_id = e($request->product_id);
        $apartado->cantidadProducto = e($request->cantidadProducto);
        $apartado->estadoApartado = e($request->estadoApartado);
        $apartado->save();
        return redirect()->route('apartados.index')->with('info','Apartado actualizado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartados  $apartados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //create for delete products
        $apartado = Apartado::findOrFail($id)->delete();
        return back()->with('delete','Ok');
    }
}
