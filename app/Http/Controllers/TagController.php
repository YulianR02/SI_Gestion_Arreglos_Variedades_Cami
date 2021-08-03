<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        //Creation list of tags
        $tags = Tag::orderBy('id','DESC')->paginate(15);
        return view('admin.tags.index', \compact('tags'));
    }

    public function create()
    {
        //create view for create
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        return view('admin.tags.create', compact('categories'));
    }

    public function store(Request $request)
    {
        //create register tags
        $request->validate([
            'name'=>'required|unique:tags|min:4|max:20',
        ]);
        $tag = new Tag;

        $tag->name = e($request->name);
        $tag->category_id = e($request->category_id);
        $tag->slug = Str::slug($request->name);
        $tag->save();
        return redirect()->route('tags.index')->with('info','Etiqueta Creada Exitosamente');
    }

    public function module( $module)
    {
        //create filter by tags
        $tags = Tag::where('module', $module)->orderBy('id','DESC')->paginate(15);
        return view('admin.tags.index',compact('tags'));
    }

    public function show(Tag $tag)
    {
        //
    }

    public function edit($id)
    {
        //create view edit for tags
        $tag = Tag::where('id',$id)->firstOrFail();
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        return view('admin.tags.edit',compact('tag','categories'));
    }

    public function update(Request $request, $id)
    {
        //create update for tags
        $request->validate([
            //'name'=>'required|unique:tags|min:4|max:20',
            'name'=>'required|min:4|max:20',
        ]);
        $tag = Tag::findOrFail($id);
        $tag->name = e($request->name);
        $tag->category_id = e($request->category_id);
        $tag->slug = Str::slug($request->name);
        $tag->save();
        return redirect()->route('tags.index')->with('info','Etiqueta Actualizada Exitosamente');

    }

    public function destroy($id)
    {
        //create for delete tags
        $tag = Tag::findOrFail($id)->delete();
        return back()->with('info','Etiqueta Eliminada Exitosamente');

    }
}
