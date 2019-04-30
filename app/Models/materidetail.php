<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class materidetail
 * @package App\Models
 * @version April 30, 2019, 6:03 am UTC
 *
 * @property string id_materi
 * @property string subbab
 */
class materidetail extends Model
{
    use SoftDeletes;

    public $table = 'materidetails';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_materi',
        'subbab'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_materi' => 'string',
        'subbab' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_materi' => 'required'
    ];

    
}
