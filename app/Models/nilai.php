<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class nilai
 * @package App\Models
 * @version April 23, 2019, 11:36 am UTC
 *
 * @property string userid
 * @property string pretest
 * @property string posttest
 * @property string komprehensif
 * @property string penugasan
 * @property string id_materi
 */
class nilai extends Model
{
    use SoftDeletes;

    public $table = 'nilais';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'pretest',
        'posttest',
        'komprehensif',
        'penugasan',
        'id_materi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'userid' => 'string',
        'pretest' => 'string',
        'posttest' => 'string',
        'komprehensif' => 'string',
        'penugasan' => 'string',
        'id_materi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'userid' => 'required',
        'pretest' => 'required',
        'posttest' => 'required',
        'komprehensif' => 'required',
        'penugasan' => 'required',
        'id_materi' => 'required'
    ];

    
}
