<?php

namespace App\Repositories;

use App\Models\penugasan;
use App\Repositories\BaseRepository;

/**
 * Class penugasanRepository
 * @package App\Repositories
 * @version April 23, 2019, 11:38 am UTC
*/

class penugasanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_materi',
        'isi_penugasan'
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
        return penugasan::class;
    }
}
