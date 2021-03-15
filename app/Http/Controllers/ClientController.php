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
}
