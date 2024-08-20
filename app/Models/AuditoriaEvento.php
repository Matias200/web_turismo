<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditoriaEvento extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'eventos_id',
        'nombre',
        'descripcion',
        'fecha',
        'ubicacion',
        'precio',
        'autor',
        'cat_id',
        'accion',
        'fecha_modificacion'
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'eventos_id');
    }

    public function categorias() {
        return $this->belongsTo(categorias::class, 'cat_id');
    }
}
