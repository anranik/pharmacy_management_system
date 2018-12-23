<?php

namespace App\Http\Controllers\Backend\Medicinecategory;

use App\Models\Medicinecategory\Medicinecategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Responses\Backend\Medicinecategory\CreateResponse;
use App\Http\Responses\Backend\Medicinecategory\EditResponse;
use App\Repositories\Backend\Medicinecategory\MedicinecategoryRepository;
use App\Http\Requests\Backend\Medicinecategory\ManageMedicinecategoryRequest;
use App\Http\Requests\Backend\Medicinecategory\CreateMedicinecategoryRequest;
use App\Http\Requests\Backend\Medicinecategory\StoreMedicinecategoryRequest;
use App\Http\Requests\Backend\Medicinecategory\EditMedicinecategoryRequest;
use App\Http\Requests\Backend\Medicinecategory\UpdateMedicinecategoryRequest;
use App\Http\Requests\Backend\Medicinecategory\DeleteMedicinecategoryRequest;

/**
 * MedicinecategoriesController
 */
class MedicinecategoriesController extends Controller
{
    /**
     * variable to store the repository object
     * @var MedicinecategoryRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param MedicinecategoryRepository $repository;
     */
    public function __construct(MedicinecategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Medicinecategory\ManageMedicinecategoryRequest  $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageMedicinecategoryRequest $request)
    {
        return new ViewResponse('backend.medicinecategories.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateMedicinecategoryRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Medicinecategory\CreateResponse
     */
    public function create(CreateMedicinecategoryRequest $request)
    {
        return new CreateResponse('backend.medicinecategories.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreMedicinecategoryRequestNamespace  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreMedicinecategoryRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('admin.medicinecategories.index'), ['flash_success' => trans('alerts.backend.medicinecategories.created')]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Medicinecategory\Medicinecategory  $medicinecategory
     * @param  EditMedicinecategoryRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Medicinecategory\EditResponse
     */
    public function edit(Medicinecategory $medicinecategory, EditMedicinecategoryRequest $request)
    {
        return new EditResponse($medicinecategory);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateMedicinecategoryRequestNamespace  $request
     * @param  App\Models\Medicinecategory\Medicinecategory  $medicinecategory
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateMedicinecategoryRequest $request, Medicinecategory $medicinecategory)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $medicinecategory, $input );
        //return with successfull message
        return new RedirectResponse(route('admin.medicinecategories.index'), ['flash_success' => trans('alerts.backend.medicinecategories.updated')]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteMedicinecategoryRequestNamespace  $request
     * @param  App\Models\Medicinecategory\Medicinecategory  $medicinecategory
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Medicinecategory $medicinecategory, DeleteMedicinecategoryRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($medicinecategory);
        //returning with successfull message
        return new RedirectResponse(route('admin.medicinecategories.index'), ['flash_success' => trans('alerts.backend.medicinecategories.deleted')]);
    }
    
}
