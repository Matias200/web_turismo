<?php

namespace App\Repositories;

use App\Models\eventos;
use App\Repositories\BaseRepository;

class eventosRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'fecha',
        'ubicacion',
        'precio',
        'imagen',
        'suscripcion',
        'user_id',
        'cat_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return eventos::class;
    }
}
