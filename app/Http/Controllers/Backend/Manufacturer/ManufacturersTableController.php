<?php

namespace App\Http\Controllers\Backend\Manufacturer;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Manufacturer\ManufacturerRepository;
use App\Http\Requests\Backend\Manufacturer\ManageManufacturerRequest;

/**
 * Class ManufacturersTableController.
 */
class ManufacturersTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var ManufacturerRepository
     */
    protected $manufacturer;

    /**
     * contructor to initialize repository object
     * @param ManufacturerRepository $manufacturer;
     */
    public function __construct(ManufacturerRepository $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * This method return the data of the model
     * @param ManageManufacturerRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageManufacturerRequest $request)
    {
        return Datatables::of($this->manufacturer->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($manufacturer) {
                return Carbon::parse($manufacturer->created_at)->toDateString();
            })
            ->addColumn('actions', function ($manufacturer) {
                return $manufacturer->action_buttons;
            })
            ->make(true);
    }
}
