<?php

namespace App\Listeners\Backend\Medicinecategory;

use App\Events\Backend\Medicinecategory\MedicineCategory;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MedicineCategoryListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MedicineCategory  $event
     * @return void
     */
    public function handle(MedicineCategory $event)
    {
        //
    }
}
