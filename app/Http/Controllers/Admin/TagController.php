<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tags=Tag::all();

        return view('admin.tags.index', compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors= [

            'blue' => 'azul', 
            'yellow' => 'amarillo', 
            'red' => 'rojo',
            'indigo' => 'indigo', 
            'dimgray' => 'gris pesado', 
            'pink' => 'rosado',
            'darkblue' => 'azul oscuro',
            'purple' => 'morado',
            'orange' => 'anaranjado'

        ];

        return view('admin.tags.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
         
            'name'=> 'required', 
            'slug' => 'required|unique:tags', 
            'color' => 'required'

        ]);
        
        Tag::create($request->all());

         return redirect()->route('admin.tags.index')
                        ->with('info', 'Creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tag)
    {
        $request->validate([
         
            'name'=> 'required', 
            'slug' => "required|unique:tags,slug,$tag->id", 
            'color' => 'required'

        ]);
        
        $tag->update($request->all());

         return redirect()->route('admin.tags.index')
                        ->with('info', 'Actualizado con éxito');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tag)
    {
        
    }
}
