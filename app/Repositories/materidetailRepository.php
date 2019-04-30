<?php

namespace App\Repositories;

use App\Models\materidetail;
use App\Repositories\BaseRepository;

/**
 * Class materidetailRepository
 * @package App\Repositories
 * @version April 30, 2019, 6:03 am UTC
*/

class materidetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_materi',
        'subbab'
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
        return materidetail::class;
    }
}
