<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('can:subcategories.index');
        $this->middleware('can:subcategories.create')->only('create','store');
        $this->middleware('can:subcategories.edit')->only('edit','updated');
        $this->middleware('can:subcategories.destroy');
    }
    public function index()
    {
        //Creation list of subcategories
        $subcategories = Subcategory::orderBy('id','DESC')->paginate(15);
        return view('admin.subcategories.index', \compact('subcategories'));
    }

    public function create()
    {
        //create view for create
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        return view('admin.subcategories.create', \compact('categories'));
    }

    public function store(Request $request)
    {
        //create register subcategories
        $request->validate([
            'name'=>'required|unique:subcategories|min:4|max:30',
        ]);
        $subcategory = new Subcategory;
        $subcategory->category_id = e($request->category_id);
        $subcategory->name = e($request->name);
        $subcategory->slug = Str::slug($request->name);
        $subcategory->save();
        return redirect()->route('subcategories.index')->with('info','Subcategoria creada exitosamente');
    }

    public function show(Subcategory $subcategory)
    {
        //
    }

    public function edit($id)
    {
        //create view edit for subcategories
        $subcategory = Subcategory::where('id',$id)->firstOrFail();
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        return view('admin.subcategories.edit',compact('subcategory','categories'));
    }

    public function update(Request $request, $id)
    {
        //create update for subcategories
        $request->validate([
            'name'=>'required|unique:subcategories|min:4|max:30',
        ]);
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->category_id = e($request->category_id);
        $subcategory->name = e($request->name);
        $subcategory->slug = Str::slug($request->name);
        $subcategory->save();
        return redirect()->route('subcategories.index')->with('info','Subcategoria actualizada exitosamente');

    }

    public function destroy($id)
    {
        //create for delete subcategories
        $subcategory = Subcategory::findOrFail($id)->delete();
        return back()->with('delete','Ok');

    }
}
