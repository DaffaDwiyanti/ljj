<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class kelas
 * @package App\Models
 * @version April 23, 2019, 11:30 am UTC
 *
 * @property string id_kelas
 * @property string nama_kelas
 * @property string deskripsi
 * @property string logo
 */
class kelas extends Model
{
    use SoftDeletes;

    public $table = 'kelas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_kelas',
        'nama_kelas',
        'deskripsi',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_kelas' => 'string',
        'nama_kelas' => 'string',
        'deskripsi' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_kelas' => 'required',
        'deskripsi' => 'required',
        // 'logo' => 'required'
    ];

    
}
