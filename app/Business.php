<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nit', 'name', 'city',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
