<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

//    Relación Uno a Muchos con la tabla Posts
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
