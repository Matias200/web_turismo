<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    public $table = 'eventos';

    protected $primaryKey = 'id';
    public $fillable = [
        'nombre',
        'descripcion',
        'fecha',
        'ubicacion',
        'enlace',
        'precio',
        'imagen',
        // 'suscripcion',
        'autor',
        'cat_id'
    ];

    protected $casts = [
        'nombre' => 'string',
        'descripcion' => 'string',
        'fecha' => 'string',
        'ubicacion' => 'string',
        'enlace' => 'string',
        'precio' => 'decimal:2',
        'imagen' => 'string',
        // 'suscripcion' => 'boolean',
        'autor' => 'string',
        'cat_id' => 'integer'
    ];

    public static array $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'fecha' => 'required',
        'ubicacion' => 'required',
        'enlace' => 'required',
        'precio' => 'required',
        'imagen' => 'required',
        // 'suscripcion' => 'required',
        'autor' => 'nullable ',
        'cat_id' => 'required '
    ];

    public function categorias() {
        return $this->belongsTo(categorias::class, 'cat_id');
    }



    public function user() //Con esto pude mostrar el nombre de usuario envés de solo el id en eventos.table.blade.php haciendo uso de esta relacion <td>{{ $evento->user->name }}</td>
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function auditoria_eventos()
    {
        return $this->hasMany(AuditoriaEvento::class, 'eventos_id');
    }

   

    

}
