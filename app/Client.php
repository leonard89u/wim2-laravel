<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = ['name', 'email', 'status'];

    public function scopeActifs($query)
    {

        return $query->where('status',1);

    }
}