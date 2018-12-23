<?php

namespace App\Models\Medicinecategory\Traits;

/**
 * Class MedicinecategoryAttribute.
 */
trait MedicinecategoryAttribute
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
                '.$this->getEditButtonAttribute("edit-medicinecategory", "admin.medicinecategories.edit").'
                '.$this->getDeleteButtonAttribute("delete-medicinecategory", "admin.medicinecategories.destroy").'
                </div>';
    }
}
