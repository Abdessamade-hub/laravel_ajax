<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use response;
use Illuminate\Support\Facades\Input;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(4);
        return view('post/index', compact('posts'));
    }
//store
    public function addPost(Request $request)
    {
        
            $post = new post;
            $post->title = $request->titl;
            $post->body = $request->body;
            $post->save();
            return response()->json($post);
    }
//edit post

    public function editPost(Request $request)
    {
        
        $post = post::find($request->id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return response()->json($post);
    }
//delete post
    public function deletePost(Request $request)
    {
        $post = post::find($request->id)->delete();
        return response()->json();
    }


//pagination 

    public function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $posts = Post::paginate(5);
            return view('post/index', compact('posts'))->render();
        }
    }




}
