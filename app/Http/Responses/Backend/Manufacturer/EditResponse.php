<?php

namespace App\Http\Responses\Backend\Manufacturer;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Manufacturer\Manufacturer
     */
    protected $manufacturers;

    /**
     * @param App\Models\Manufacturer\Manufacturer $manufacturers
     */
    public function __construct($manufacturers)
    {
        $this->manufacturers = $manufacturers;
    }

    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.manufacturers.edit')->with([
            'manufacturers' => $this->manufacturers
        ]);
    }
}