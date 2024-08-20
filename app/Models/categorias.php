<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    public $table = 'categorias';

    public $fillable = [
        'descripcion'
    ];

    protected $casts = [
        'descripcion' => 'string'
    ];

    public static array $rules = [
        'descripcion' => 'required'
    ];

    public function eventos() {
        return this->hasMany('App\Models\eventos');
    }

    

    
}
