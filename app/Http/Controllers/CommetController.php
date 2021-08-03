<?php

namespace App\Http\Controllers;

use App\Commet;
use App\Post;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommetController extends Controller
{

    public function productStore(Request $request)
    {
        //creation store by comments
        $request->validate([
            'body'=>'required',
        ]);
        $comment = new Commet();
        $comment->body =$request->body;
        $comment->user()->associate($request->user());
        $product = Product::find($request->product_id);
        $product->comments()->save($comment);
        return back()->with('info','El Comentario esta siendo evaluado');
    }

    public function productReplyStore(Request $request)
    {
        //creation store by comments
        $request->validate([
            'body'=>'required',
        ]);
        $reply = new Commet();
        $reply->body =$request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id =$request->get('comment_id');
        $product = Product::find($request->get('product_id'));
        $product->comments()->save($reply);
        return back()->with('info','La respuesta esta siendo evaluado');
    }
    


    public function store(Request $request)
    {
        //creation store by comments
        $request->validate([
            'body'=>'required',
        ]);
        $comment = new Commet();
        $comment->body =$request->body;
        $comment->user()->associate($request->user());
        $post = Post::find($request->post_id);
        $post->comments()->save($comment);
        return back()->with('info','El Comentario esta siendo evaluado');
    }

    public function replyStore(Request $request)
    {
        //creation store by comments
        $request->validate([
            'body'=>'required',
        ]);
        $reply = new Commet();
        $reply->body =$request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id =$request->get('comment_id');
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($reply);
        return back()->with('info','La respuesta esta siendo evaluado');
    }

    public function edit(Commet $commet)
    {
        //create for edit comment
        return view('admin.posts.partials._editComments', compact('commet'));

    }

    public function update(Request $request, Commet $commet)
    {
        //create for update comment
        $request->validate([
            'body'=>'required',
        ]);
        $commet->fill($request->all())->save();
        return back()->with('info','Actualizado con Exito');
    }

    public function destroy(Commet $commet)
    {
        // //create for delete comment
        $commet->delete();
        return back()->with('info','Comentario Eliminado Exitosamente');
    }
}
