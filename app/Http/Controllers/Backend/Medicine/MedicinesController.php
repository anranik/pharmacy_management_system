<?php

namespace App\Http\Controllers\Backend\Medicine;

use App\Models\Medicine\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Responses\Backend\Medicine\CreateResponse;
use App\Http\Responses\Backend\Medicine\EditResponse;
use App\Repositories\Backend\Medicine\MedicineRepository;
use App\Http\Requests\Backend\Medicine\ManageMedicineRequest;
use App\Http\Requests\Backend\Medicine\CreateMedicineRequest;
use App\Http\Requests\Backend\Medicine\StoreMedicineRequest;
use App\Http\Requests\Backend\Medicine\EditMedicineRequest;
use App\Http\Requests\Backend\Medicine\UpdateMedicineRequest;
use App\Http\Requests\Backend\Medicine\DeleteMedicineRequest;

/**
 * MedicinesController
 */
class MedicinesController extends Controller
{
    /**
     * variable to store the repository object
     * @var MedicineRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param MedicineRepository $repository;
     */
    public function __construct(MedicineRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Medicine\ManageMedicineRequest  $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageMedicineRequest $request)
    {
        return new ViewResponse('backend.medicines.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateMedicineRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Medicine\CreateResponse
     */
    public function create(CreateMedicineRequest $request)
    {
        return new CreateResponse('backend.medicines.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreMedicineRequestNamespace  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreMedicineRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('admin.medicines.index'), ['flash_success' => trans('alerts.backend.medicines.created')]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Medicine\Medicine  $medicine
     * @param  EditMedicineRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Medicine\EditResponse
     */
    public function edit(Medicine $medicine, EditMedicineRequest $request)
    {
        return new EditResponse($medicine);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateMedicineRequestNamespace  $request
     * @param  App\Models\Medicine\Medicine  $medicine
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateMedicineRequest $request, Medicine $medicine)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $medicine, $input );
        //return with successfull message
        return new RedirectResponse(route('admin.medicines.index'), ['flash_success' => trans('alerts.backend.medicines.updated')]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteMedicineRequestNamespace  $request
     * @param  App\Models\Medicine\Medicine  $medicine
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Medicine $medicine, DeleteMedicineRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($medicine);
        //returning with successfull message
        return new RedirectResponse(route('admin.medicines.index'), ['flash_success' => trans('alerts.backend.medicines.deleted')]);
    }
    
}
