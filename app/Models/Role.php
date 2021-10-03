<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //    Relacion Muchos a Muchos con la tabla Users
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //    Relacion Muchos a Muchos con la tabla Permissions
    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission');
    }
}
