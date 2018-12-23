<?php

namespace App\Models\Manufacturer\Traits;

/**
 * Class ManufacturerAttribute.
 */
trait ManufacturerAttribute
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
                '.$this->getEditButtonAttribute("edit-manufacturer", "admin.manufacturers.edit").'
                '.$this->getDeleteButtonAttribute("delete-manufacturer", "admin.manufacturers.destroy").'
                </div>';
    }
}
