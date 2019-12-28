<?php

namespace App\Repositories;

use App\Models\products;
use App\Repositories\BaseRepository;

/**
 * Class productsRepository
 * @package App\Repositories
 * @version December 23, 2019, 8:43 am UTC
*/

class productsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'merk',
        'harga',
        'stok',
        'gbr_product'
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
        return products::class;
    }
}
