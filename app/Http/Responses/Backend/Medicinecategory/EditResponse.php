<?php

namespace App\Http\Responses\Backend\Medicinecategory;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Medicinecategory\Medicinecategory
     */
    protected $medicinecategories;

    /**
     * @param App\Models\Medicinecategory\Medicinecategory $medicinecategories
     */
    public function __construct($medicinecategories)
    {
        $this->medicinecategories = $medicinecategories;
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
        return view('backend.medicinecategories.edit')->with([
            'medicinecategories' => $this->medicinecategories
        ]);
    }
}