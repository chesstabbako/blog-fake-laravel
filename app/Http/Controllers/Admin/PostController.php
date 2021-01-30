<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.posts.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id'); // {'id':'name'}

        $tags= Tag::all();
         
        return view('admin.posts.create', compact('categories', 'tags'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {

        $post= Post::create($request->all());
        
        if ($request->file('file')) {
            
            $url= Storage::put('posts', $request->file('file'));
        
           $post->images()->create([
            
            'url' => $url,
            'imageable_id' => $post->id,
            'imageable_type' => Post::class

           ]);

        }
        
        if($request->tags){
        
            $post->tags()->attach($request->tags);
         
        }
        
        return redirect()->route('admin.posts.edit', $post);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $categories=Category::pluck('name','id'); // {'id':'name'}
        $tags= Tag::all();

    
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostStoreRequest $request, Post $post)
    {
        
       $post->update($request->all());

        if($request->file('file')){
         
            $url= Storage::put('posts', $request->file('file'));
            
            if($post->images){

                Storage::delete($post->images->url);
            
                $post->images()->where('imageable_id', $post->id)
                ->where('imageable_type', Post::class)
                ->update([
                 
                  'url' => $url,
             
                ]);

            }else{

                $post->images()->create([

                   'url' => $url,
                   'imageable_id' => $post->id,
                   'imageable_type' => Post::class

                ]);

            }

        }

        if($request->tags){
        
           $post->tags()->attach($request->tags);
         
        }
        
        return redirect()->route('admin.posts.edit', $post);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        $post->delete();

        if($post->images){

          Storage::delete($post->images->url);

        }

        return redirect()->route('admin.posts.index');
        
    }
}
