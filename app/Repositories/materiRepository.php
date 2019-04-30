<?php

namespace App\Repositories;

use App\Models\materi;
use App\Repositories\BaseRepository;

/**
 * Class materiRepository
 * @package App\Repositories
 * @version April 23, 2019, 11:37 am UTC
*/

class materiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_materi',
        'id_tutor',
        'id_admin',
        'materi',
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
        return materi::class;
    }
}
