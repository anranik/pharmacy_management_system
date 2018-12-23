<?php

namespace App\Http\Responses\Backend\Medicine;

use App\Models\Medicinecategory\Medicinecategory;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Medicine\Medicine
     */
    protected $medicines;
    protected $categories;

    /**
     * @param App\Models\Medicine\Medicine $medicines
     */
    public function __construct($medicines)
    {
        $this->medicines = $medicines;
        $this->categories = Medicinecategory::all('name');
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
        return view('backend.medicines.edit')->with([
            'medicines' => $this->medicines,
            'categories' => $this->categories,
        ]);
    }
}