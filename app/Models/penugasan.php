<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class penugasan
 * @package App\Models
 * @version April 23, 2019, 11:38 am UTC
 *
//  * @property string id_penugasan
 * @property string id_materi
 * @property string isi_penugasan
 */
class penugasan extends Model
{
    use SoftDeletes;

    public $table = 'penugasans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        // 'id_penugasan',
        'id_materi',
        'isi_penugasan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        // 'id_penugasan' => 'string',
        'id_materi' => 'string',
        'isi_penugasan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'id_penugasan' => 'required',
        'id_materi' => 'required',
        'isi_penugasan' => 'required'
    ];

    
}
