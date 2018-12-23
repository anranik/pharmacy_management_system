<?php

namespace App\Models\Medicine\Traits;

/**
 * Class MedicineAttribute.
 */
trait MedicineAttribute
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
                '.$this->getEditButtonAttribute("edit-medicine", "admin.medicines.edit").'
                '.$this->getDeleteButtonAttribute("delete-medicine", "admin.medicines.destroy").'
                </div>';
    }
}
