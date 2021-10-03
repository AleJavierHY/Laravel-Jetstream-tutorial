<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    Relacion Uno a Muchos con la tabla Users
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

//    Relacion Uno a Muchos con la tabla Categories
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
