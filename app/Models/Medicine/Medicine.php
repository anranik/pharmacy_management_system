<?php

namespace App\Models\Medicine;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicine\Traits\MedicineAttribute;
use App\Models\Medicine\Traits\MedicineRelationship;

class Medicine extends Model
{
    use ModelTrait,
        MedicineAttribute,
    	MedicineRelationship {
            // MedicineAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'medicines';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [
        'name',
        'generic_name',
        'category_id',
        'type',
        'purchase_price',
        'sell_price',
        'total_unit',
        'current_unit',
        'inventory',
        'manufacturer_id',
        'effect_date',
        'created_by',
        'purchase_date',
        'expire_date'
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
