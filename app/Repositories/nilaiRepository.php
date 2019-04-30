<?php

namespace App\Repositories;

use App\Models\nilai;
use App\Repositories\BaseRepository;

/**
 * Class nilaiRepository
 * @package App\Repositories
 * @version April 23, 2019, 11:36 am UTC
*/

class nilaiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'pretest',
        'posttest',
        'komprehensif',
        'penugasan',
        'id_materi'
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
        return nilai::class;
    }
}
