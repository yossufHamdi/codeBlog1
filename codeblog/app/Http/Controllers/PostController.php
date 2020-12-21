<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
   function posts()
   {
    $posts=Post::get();
    return view('posts',[
        'posts'=>$posts
    ]);
    }
    function show($id){
        $post=Post::where("id","=",$id)->first();
        return view('show',['post'=>$post]);
    }
    function search($keyword){
        $posts=Post::where('body',"like",'%'.$keyword.'%' )-> orwhere('title',"like",'%'.$keyword.'%')->get();
        return view('search',[
            'posts'=>$posts
        ]);
   }
    function latest($num){
        $posts=Post::orderby("id","desc")->limit($num)->get();
        return view("latest",['posts'=>$posts]);
    }
    function create(){
       return view('create');
    }

    function store(Request $request){
        $post=new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        if ($request->file('image')!=null){
            $post->image= $request->file('image')->store('/uploads/posts');
        }
        $post->save();
        return redirect('posts');



    }

        function edit($id){
            $post=Post::find($id);

            return view('edit',[
                'post'=>$post
            ]);
        }
    function update(Request $request , $id){
            $post=Post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        if ($request->image!=null){
            Storage::delete("/".$post->image);
            $post->image= $request->file('image')->store('/uploads/posts');
        }
        $post->save();
        return redirect('posts/show/'.$post->id);
    }

    function delete($id){
        $post=Post::find($id);
        Storage::delete("/".$post->image);
        $post->delete();

        return redirect('posts');

    }
}
