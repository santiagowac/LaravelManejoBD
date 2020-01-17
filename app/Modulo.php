<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modulo extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'ruta',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function rols()
    {
        return $this->belongsToMany('App\Rol' , 'modulo_rols');
    }
}
