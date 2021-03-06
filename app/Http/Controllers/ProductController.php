<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('can:products.index');
        $this->middleware('can:products.create')->only('create','store');
        $this->middleware('can:products.edit')->only('edit','update');
        $this->middleware('can:products.destroy')->only('destroy');
    }

    public function index()
    {
        //Creation list of products
        $products =Product::orderBy('id','DESC')->with('images')->get()->take(6);
        return view('admin.products.index', \compact('products'));
    }

    public function catalogo()
    {

    }
    public function create()
    {
        //create view for create
        $subcategories = Subcategory::orderBy('name','ASC')->pluck('name','id');
        return view('admin.products.create', \compact('subcategories'));
    }

    public function store(Request $request)
    {
        //create register products
        $request->validate([

            'user_id'=>'required',
            'subcategory_id'=>'required',
            'name'=>'required|unique:products|min:4|max:60',
            'stock'=>'required',
            'actualPrice'=>'required|numeric',
            'previousPrice'=>'required|numeric',
            'discountRate'=>'required|numeric',
            'images.*'=>'required|image',
            'shortDescription'=>'required|max:50',
            'longDescription'=>'required|min:60',
            'state'=>'required',
            // 'status'=>'required',
        ]);

        $urlimages=[];
        if($request->hasFile('images')){
            $images=$request->file('images');
            foreach ($images as $image) {
                $nombre = time().$image->getClientOriginalName();
                $ruta = public_path().'/images/';
                $image->move($ruta,$nombre);
                $urlimages[]['url']='/images/'.$nombre;
            }

        }
        $product = new Product;
        $product->user_id = e($request->user_id);
        $product->subcategory_id = e($request->subcategory_id);
        $product->name = e($request->name);
        $product->slug = Str::slug($request->name);
        $product->stock = e($request->stock);
        $product->actualPrice = e($request->actualPrice);
        $product->previousPrice = e($request->previousPrice);
        $product->discountRate = e($request->discountRate);
        $product->shortDescription = e($request->shortDescription);
        $product->longDescription = e($request->longDescription);
        $product->state = e($request->state);
        // $product->status = e($request->status);
        $product->save();
        $product->images()->createMany($urlimages);
        return redirect()->route('products.index')->with('info','Producto Creado Exitosamente');
    }

    public function show( $id)
    {
        //Show for products
        $product = Product::where('id',$id)->with('subcategory','user','images','comments','comments.user')->firstOrFail();
        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::where('id',$id)->firstOrFail();
        $subcategories = Subcategory::orderBy('name','ASC')->pluck('name','id');
        return view('admin.products.edit',compact('product','subcategories'));
    }

    public function update(Request $request, $id)
    {
        //create update for products
        $request->validate([

            'user_id'=>'required',
            'subcategory_id'=>'required',
            'name'=>'required|min:4|max:60',
            'stock'=>'required',
            'actualPrice'=>'required|numeric',
            'previousPrice'=>'required|numeric',
            'discountRate'=>'required|numeric',
            // 'images'=>'required',
            'shortDescription'=>'required|max:50',
            'longDescription'=>'required|min:60',
            'state'=>'required',
            // 'status'=>'required',
        ]);
        $urlimages=[];
        if($request->hasFile('images')){
            $images=$request->file('images');
            foreach ($images as $image) {
                $nombre = time().$image->getClientOriginalName();
                $ruta = public_path().'/images/';
                $image->move($ruta,$nombre);
                $urlimages[]['url']='/images/'.$nombre;
            }

        }
        $product = Product::findOrFail($id);
        $product->user_id = e($request->user_id);
        $product->subcategory_id = e($request->subcategory_id);
        $product->name = e($request->name);
        $product->slug = Str::slug($request->name);
        $product->stock = e($request->stock);
        $product->actualPrice = e($request->actualPrice);
        $product->previousPrice = e($request->previousPrice);
        $product->discountRate = e($request->discountRate);
        $product->shortDescription = e($request->shortDescription);
        $product->longDescription = e($request->longDescription);
        $product->state = e($request->state);
        // $product->status = e($request->status);
        $product->save();

        if($request->hasFile('images')){
            $product->images()->createMany($urlimages);
        }
        return redirect()->route('products.index')->with('info','producto actualizado Exitosamente');

    }

    public function destroy($id)
    {
        //create for delete products
        $product = Product::findOrFail($id)->delete();
        return back()->with('delete','Ok');

    }
}
