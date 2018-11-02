<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at']; //lo agrega a carbon para poderlo formatear

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    { // se manda a llamar en el seeder de post en la relacion
        return $this->belongsToMany(Tag::class); //pertenece y tiene muchas etiquetas
    }
}
