<?php

namespace App\Repositories;

use App\Models\citas;
use App\Repositories\BaseRepository;

class citasRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'descripcion',
        'fecha',
        'hora',
        'user_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return citas::class;
    }
}
