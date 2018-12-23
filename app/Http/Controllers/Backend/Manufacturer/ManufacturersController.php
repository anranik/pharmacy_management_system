<?php

namespace App\Http\Controllers\Backend\Manufacturer;

use App\Models\Manufacturer\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Responses\Backend\Manufacturer\CreateResponse;
use App\Http\Responses\Backend\Manufacturer\EditResponse;
use App\Repositories\Backend\Manufacturer\ManufacturerRepository;
use App\Http\Requests\Backend\Manufacturer\ManageManufacturerRequest;
use App\Http\Requests\Backend\Manufacturer\CreateManufacturerRequest;
use App\Http\Requests\Backend\Manufacturer\StoreManufacturerRequest;
use App\Http\Requests\Backend\Manufacturer\EditManufacturerRequest;
use App\Http\Requests\Backend\Manufacturer\UpdateManufacturerRequest;
use App\Http\Requests\Backend\Manufacturer\DeleteManufacturerRequest;

/**
 * ManufacturersController
 */
class ManufacturersController extends Controller
{
    /**
     * variable to store the repository object
     * @var ManufacturerRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param ManufacturerRepository $repository;
     */
    public function __construct(ManufacturerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Manufacturer\ManageManufacturerRequest  $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageManufacturerRequest $request)
    {
        return new ViewResponse('backend.manufacturers.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateManufacturerRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Manufacturer\CreateResponse
     */
    public function create(CreateManufacturerRequest $request)
    {
        return new CreateResponse('backend.manufacturers.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreManufacturerRequestNamespace  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreManufacturerRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('admin.manufacturers.index'), ['flash_success' => trans('alerts.backend.manufacturers.created')]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Manufacturer\Manufacturer  $manufacturer
     * @param  EditManufacturerRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Manufacturer\EditResponse
     */
    public function edit(Manufacturer $manufacturer, EditManufacturerRequest $request)
    {
        return new EditResponse($manufacturer);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateManufacturerRequestNamespace  $request
     * @param  App\Models\Manufacturer\Manufacturer  $manufacturer
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateManufacturerRequest $request, Manufacturer $manufacturer)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $manufacturer, $input );
        //return with successfull message
        return new RedirectResponse(route('admin.manufacturers.index'), ['flash_success' => trans('alerts.backend.manufacturers.updated')]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteManufacturerRequestNamespace  $request
     * @param  App\Models\Manufacturer\Manufacturer  $manufacturer
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Manufacturer $manufacturer, DeleteManufacturerRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($manufacturer);
        //returning with successfull message
        return new RedirectResponse(route('admin.manufacturers.index'), ['flash_success' => trans('alerts.backend.manufacturers.deleted')]);
    }
    
}
