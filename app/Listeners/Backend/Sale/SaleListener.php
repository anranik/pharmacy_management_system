<?php

namespace App\Listeners\Backend\Sale;

use App\Events\Backend\Sale\Sale;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaleListener
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
     * @param  Sale  $event
     * @return void
     */
    public function handle(Sale $event)
    {
        //
    }
}
