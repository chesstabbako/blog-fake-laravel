<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    protected $fillable= ['name','slug'];

    //Relación uno a muchos 

    public function posts(){

        return $this->hasMany(Post::class);
  
    }

    public function getRouteKeyName()
    {
        return 'slug';
    } 


}
