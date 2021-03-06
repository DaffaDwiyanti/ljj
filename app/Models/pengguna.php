<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pengguna
 * @package App\Models
 * @version April 23, 2019, 11:32 am UTC
 *
 * @property string userid
 * @property string nama
 * @property string username
 * @property string password
 * @property string role
 */
class pengguna extends Model
{
    use SoftDeletes;

    public $table = 'penggunas';
    

    protected $dates = ['deleted_at'];

    public function materi(){
        return $this->belongsToMany('Apps/Models/materi')->withTimeStamps();
    }

    public $fillable = [
        'userid',
        'nama',
        'id_kelas',
        'tanggal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'userid' => 'string',
        'nama' => 'string',
        'id_kelas' => 'string',
        'tanggal' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'userid' => 'required',
        'nama' => 'required'
    ];

    
}
