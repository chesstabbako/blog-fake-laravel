<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {

      /* Al momento de ejecutar los seeders no hay ningún usuario autenticado
      y esto me genera un error */

      if(! \App::runningInConsole()){

        $post->user_id= auth()->user()->id;

      }

    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleting(Post $post)
    {
        if($post->images){
          
          Storage::delete($post->images->url);

        }

        /* Este observer debe registrarse en providers/eventProviders
        y en el método boot se coloca */
    }

   
}
