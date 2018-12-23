<?php

namespace App\Models\Sale;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale\Traits\SaleAttribute;
use App\Models\Sale\Traits\SaleRelationship;

class Sale extends Model
{
    use ModelTrait,
        SaleAttribute,
    	SaleRelationship {
            // SaleAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'sales';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [
    'name',
    'generic_name',
    'customer_name',
    'customer_contact',
    'sale_date',
    'quantity',
    'unit_price',
    'total_price',
    'expire_date',
    'created_by',
    ];

    /**
     * Default values for model fields
     * @var array
     */
    protected $attributes = [

    ];

    /**
     * Dates
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Guarded fields of model
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Constructor of Model
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
