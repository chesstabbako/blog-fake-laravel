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

     public function show(Post $post){
     
        $similares= Post::where('category_id', $post->category_id)
                    ->where('status', 2)
                    ->where('id', '!=', $post->id)
                    ->orderBy('id', 'desc')
                    ->take(4)
                    ->get();

       return view('posts.show', compact('post', 'similares'));


     }
 

}
