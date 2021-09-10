<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        //Creation list of categories
        $categories = Category::orderBy('id','DESC')->paginate(15);
        return view('admin.categories.index', \compact('categories'));
    }

    public function create()
    {
        //create view for create
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        //create register categories
        $request->validate([
            'name'=>'required|unique:categories|min:4|max:20',
            'module'=>'required|max:20',
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $nombre = time().$image->getClientOriginalName();
            $ruta = public_path().'/images/';
            $image->move($ruta,$nombre);
            $urlimage['url']='/images/'.$nombre;
        }
        $category = new Category;
        $category->name = e($request->name);
        $category->module = e($request->module);
        $category->slug = Str::slug($request->name);
        $category->icon = e($request->icon);
        $category->front = e($request->front);
        $category->save();
        if($request->hasFile('image')){
            $category->image()->create($urlimage);
        }
        return redirect()->route('categories.index')->with('info','Categoria Creada Exitosamente');
    }

    public function module( $module)
    {
        //create filter by categories
        $categories = Category::where('module', $module)->orderBy('id','DESC')->paginate(15);
        return view('admin.categories.index',compact('categories'));
    }

    public function show(Category $category)
    {
        //
    }

    public function edit($id)
    {
        //create view edit for categories
        $category = Category::where('id',$id)->firstOrFail();
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        //create update for categories
        $request->validate([
            //'name'=>'required|unique:categories|min:4|max:20',
            'name'=>'required|min:4|max:20',
            'module'=>'required|max:20',
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $nombre = time().$image->getClientOriginalName();
            $ruta = public_path().'/images/';
            $image->move($ruta,$nombre);
            $urlimage['url']='/images/'.$nombre;
        }
        $category = Category::findOrFail($id);
        $category->name = e($request->name);
        $category->module = e($request->module);
        $category->slug = Str::slug($request->name);
        $category->icon = e($request->icon);
        $category->front = e($request->front);
        if($request->hasFile('image')){
            $category->image()->delete();
        }
        $category->save();
        if($request->hasFile('image')){
            $category->image()->create($urlimage);
        }
        return redirect()->route('categories.index')->with('info','Categoria Actualizado Exitosamente');

    }

    public function destroy($id)
    {
        //create for delete categories
        $category = Category::findOrFail($id)->delete();
        return back()->with('info','Categoria Eliminada Exitosamente');

    }
}
