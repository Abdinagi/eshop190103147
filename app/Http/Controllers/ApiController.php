<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    /*
        This function return all post rows
    */
    public function index(Request $request){
        $posts = Post::all();

        return response($posts,200);
    }
}
