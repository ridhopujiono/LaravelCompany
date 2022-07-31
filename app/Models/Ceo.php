<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Ceo
 * @package App\Models
 * @version July 31, 2022, 11:54 am UTC
 *
 * @property string $nama_ceo
 * @property string $jabatan
 * @property string $foto
 */
class Ceo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ceos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_ceo',
        'jabatan',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_ceo' => 'string',
        'jabatan' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_ceo' => 'required',
        'jabatan' => 'required'
    ];

    
}
