<?php

namespace App\Models\Sale\Traits;

/**
 * Class SaleAttribute.
 */
trait SaleAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-sale", "admin.sales.edit").'
                '.$this->getDeleteButtonAttribute("delete-sale", "admin.sales.destroy").'
                </div>';
    }
}
