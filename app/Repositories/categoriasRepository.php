<?php

namespace App\Repositories;

use App\Models\categorias;
use App\Repositories\BaseRepository;

class categoriasRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'descripcion'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return categorias::class;
    }
}
