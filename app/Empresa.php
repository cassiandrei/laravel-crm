<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nome', 'email', 'logo', 'website'
    ];

    public function empregados()
    {
        return $this->hasMany('App\Empregado');
    }
}
