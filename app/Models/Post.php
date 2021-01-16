<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    //Relación inversa uno a muchos

    public function user(){

      return $this->belongsTo(User::class);

    }

    //Relación inversa uno a muchos

    public function category(){

      return $this->belongsTo(Category::class);
  
    }

    //Relación muchos a muchos 

    public function tags(){

      return $this->belongsToMany(Tag::class);

    }

    //Relacion uno a uno polimórfica

    public function images(){

      return $this->morphOne(Image::class, 'imageable');

    }

    public function getRouteKeyName()
    {
        return 'slug';
    } 
 

}
