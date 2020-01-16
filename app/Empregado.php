<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empregado extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'tel', 'empresa_id',
    ];

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }
}
