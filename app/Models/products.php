<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class products
 * @package App\Models
 * @version December 23, 2019, 8:43 am UTC
 *
 * @property string merk
 * @property integer harga
 * @property integer stok
 * @property file gbr_product
 */
class products extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'merk',
        'harga',
        'stok',
        'gbr_product'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'merk' => 'string',
        'harga' => 'integer',
        'stok' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'harga' => 'numeric',
        'stok' => 'numeric'
    ];

    
}
