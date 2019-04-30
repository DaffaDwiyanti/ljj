<?php

namespace App\Repositories;

use App\Models\pengguna;
use App\Repositories\BaseRepository;

/**
 * Class penggunaRepository
 * @package App\Repositories
 * @version April 23, 2019, 11:32 am UTC
*/

class penggunaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'nama',
        'username',
        'password',
        'role'
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
        return pengguna::class;
    }
}
