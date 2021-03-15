<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ClientController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('post.index')->with(['posts' => $posts]);
    }
    public function store(Request $request) {
        Post::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'age' => $request->age
        ]);

        return back();
    }

    public function get_post($id){
        $post = Post::find($id);

        if ($post == null)
            return response(['message' => 'post not found'], 404); 
        
        return view('post.detail')->with(['post' =>$post ]);    
    }
}
