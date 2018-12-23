<?php

namespace App\Http\Responses\Backend\Sale;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Sale\Sale
     */
    protected $sales;

    /**
     * @param App\Models\Sale\Sale $sales
     */
    public function __construct($sales)
    {
        $this->sales = $sales;
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
        return view('backend.sales.edit')->with([
            'sales' => $this->sales
        ]);
    }
}