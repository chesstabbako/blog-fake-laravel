<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Post;

class PostPolicy
{
    use HandlesAuthorization;

   public function author(User $user, Post $post){

     if($user->id == $post->user_id){

       return true;

     }else{

       return false;

     }
   
   }

   public function published(?User $user,Post $post){ /*El signo de 
    interrogación se coloca para decirle a la lógica que da igual si el
     usuario está autenticado o no*/
     
    if($post->status== 2){
      
      return true;

    }else{

      return false;

    }

   }


}
