<?php

namespace App\Http\Responses\Backend\Medicine;

use App\Models\Manufacturer\Manufacturer;
use App\Models\Medicinecategory\Medicinecategory;
use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable
{
    /**
     * To Response
     * @param \App\Http\Requests\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        $categories = Medicinecategory::all()->pluck('name','id');
        $manufactures = Manufacturer::all()->pluck('name','id');
        return view('backend.medicines.create',compact('categories','manufactures'));
    }
}