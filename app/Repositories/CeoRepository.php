<?php

namespace App\Repositories;

use App\Models\Ceo;
use App\Repositories\BaseRepository;

/**
 * Class CeoRepository
 * @package App\Repositories
 * @version July 31, 2022, 11:54 am UTC
*/

class CeoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_ceo',
        'jabatan',
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
        return Ceo::class;
    }
}
