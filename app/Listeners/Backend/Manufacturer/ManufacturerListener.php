<?php

namespace App\Listeners\Backend\Manufacturer;

use App\Events\Backend\Manufacturer\Manufacturer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ManufacturerListener
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
     * @param  Manufacturer  $event
     * @return void
     */
    public function handle(Manufacturer $event)
    {
        //
    }
}
