<?php

namespace App\Repositories;

use App\Models\soal;
use App\Repositories\BaseRepository;

/**
 * Class soalRepository
 * @package App\Repositories
 * @version April 23, 2019, 11:34 am UTC
*/

class soalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        // 'id_soal',
        'id_materi',
        'id_jawaban',
        'soal',
        'jenis_soal'
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
        return soal::class;
    }
}
