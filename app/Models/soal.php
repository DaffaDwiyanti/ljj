<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class soal
 * @package App\Models
 * @version April 23, 2019, 11:34 am UTC
 *
 * @property string id_soal
 * @property string id_materi
 * @property string id_jawaban
 * @property string soal
 * @property string jenis_soal
 */
class soal extends Model
{
    use SoftDeletes;

    public $table = 'soals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        // 'id_soal',
        'id_materi',
        'id_jawaban',
        'soal',
        'jenis_soal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        // 'id_soal' => 'string',
        'id_materi' => 'string',
        'id_jawaban' => 'string',
        'soal' => 'string',
        'jenis_soal' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'id_soal' => 'required',
        'id_materi' => 'required',
        'id_jawaban' => 'required',
        'soal' => 'required',
        'jenis_soal' => 'required'
    ];

    
}
