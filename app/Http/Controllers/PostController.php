<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index(){

        $posts= Post::where('status','=', 2)->orderBy('id', 'desc')->paginate(8);
        //$posts= Post::find(1);

        return view('posts.index', compact('posts'));
 
     }
 

}
