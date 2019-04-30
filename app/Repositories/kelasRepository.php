<?php

namespace App\Repositories;

use App\Models\kelas;
use App\Repositories\BaseRepository;

/**
 * Class kelasRepository
 * @package App\Repositories
 * @version April 23, 2019, 11:30 am UTC
*/

class kelasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_kelas',
        'nama_kelas',
        'deskripsi',
        'logo'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return kelas::class;
    }
}
