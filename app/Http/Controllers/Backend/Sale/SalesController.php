<?php

namespace App\Http\Controllers\Backend\Sale;

use App\Models\Customer\Customer;
use App\Models\Medicine\Medicine;
use App\Models\Sale\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Responses\Backend\Sale\CreateResponse;
use App\Http\Responses\Backend\Sale\CreatePosResponse;
use App\Http\Responses\Backend\Sale\EditResponse;
use App\Repositories\Backend\Sale\SaleRepository;
use App\Http\Requests\Backend\Sale\ManageSaleRequest;
use App\Http\Requests\Backend\Sale\CreateSaleRequest;
use App\Http\Requests\Backend\Sale\StoreSaleRequest;
use App\Http\Requests\Backend\Sale\EditSaleRequest;
use App\Http\Requests\Backend\Sale\UpdateSaleRequest;
use App\Http\Requests\Backend\Sale\DeleteSaleRequest;

/**
 * SalesController
 */
class SalesController extends Controller
{
    /**
     * variable to store the repository object
     * @var SaleRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param SaleRepository $repository;
     */
    public function __construct(SaleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Sale\ManageSaleRequest  $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageSaleRequest $request)
    {
        return new ViewResponse('backend.sales.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateSaleRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Sale\CreateResponse
     */
    public function create(CreateSaleRequest $request)
    {
        return new CreateResponse('backend.sales.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSaleRequestNamespace  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreSaleRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('admin.sales.index'), ['flash_success' => trans('alerts.backend.sales.created')]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Sale\Sale  $sale
     * @param  EditSaleRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Sale\EditResponse
     */
    public function edit(Sale $sale, EditSaleRequest $request)
    {
        return new EditResponse($sale);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSaleRequestNamespace  $request
     * @param  App\Models\Sale\Sale  $sale
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $sale, $input );
        //return with successfull message
        return new RedirectResponse(route('admin.sales.index'), ['flash_success' => trans('alerts.backend.sales.updated')]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteSaleRequestNamespace  $request
     * @param  App\Models\Sale\Sale  $sale
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Sale $sale, DeleteSaleRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($sale);
        //returning with successfull message
        return new RedirectResponse(route('admin.sales.index'), ['flash_success' => trans('alerts.backend.sales.deleted')]);
    }

    /*
     * Point of sales form and table
     */
    public function pos()
    {
        return new CreatePosResponse('backend.sales.pos');

    }
    /*
     * 
     */
    public function getAllMedicine()
    {
        //$response = Student::where('class',Input::get('className'))->where('section',Input::get('section'))->get();
        $response = Medicine::all('id','name','generic_name','purchase_price','sell_price','current_unit');
        return response()->json($response);
    }
    /*
     * get all customer
     */
    public function getAllCustomers()
    {
        //$response = Student::where('class',Input::get('className'))->where('section',Input::get('section'))->get();
        $response = Customer::all('id','name','phone');
        return response()->json($response);
    }
    
}
