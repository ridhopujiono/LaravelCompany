<?php

namespace App\Repositories;

use App\Models\Empolyee;
use App\Repositories\BaseRepository;

/**
 * Class EmpolyeeRepository
 * @package App\Repositories
 * @version July 31, 2022, 11:57 am UTC
*/

class EmpolyeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_pegawai',
        'foto'
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
        return Empolyee::class;
    }
}
