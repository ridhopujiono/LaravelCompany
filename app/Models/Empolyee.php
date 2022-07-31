<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Empolyee
 * @package App\Models
 * @version July 31, 2022, 11:57 am UTC
 *
 * @property string $nama_pegawai
 * @property string $foto
 */
class Empolyee extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'empolyees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_pegawai',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_pegawai' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_pegawai' => 'required'
    ];

    
}
