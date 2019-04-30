<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class materi
 * @package App\Models
 * @version April 23, 2019, 11:37 am UTC
 *
 * @property string id_materi
 * @property string id_tutor
 * @property string id_admin
 * @property string materi
 * @property string logo
 */
class materi extends Model
{
    use SoftDeletes;

    public $table = 'materis';
    

    protected $dates = ['deleted_at'];

    public function tutor(){
        return $this->belongsTo('App/Models/pengguna');
    }

    public $fillable = [
        'id_tutor',
        'id_admin',
        'materi',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_tutor' => 'string',
        'id_admin' => 'string',
        'materi' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_tutor' => 'required',
        'id_admin' => 'required',
        'materi' => 'required',
        'logo' => 'required'
    ];

    
}
