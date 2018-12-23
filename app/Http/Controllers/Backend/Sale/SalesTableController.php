<?php

namespace App\Http\Controllers\Backend\Sale;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Sale\SaleRepository;
use App\Http\Requests\Backend\Sale\ManageSaleRequest;

/**
 * Class SalesTableController.
 */
class SalesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var SaleRepository
     */
    protected $sale;

    /**
     * contructor to initialize repository object
     * @param SaleRepository $sale;
     */
    public function __construct(SaleRepository $sale)
    {
        $this->sale = $sale;
    }

    /**
     * This method return the data of the model
     * @param ManageSaleRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSaleRequest $request)
    {
        return Datatables::of($this->sale->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($sale) {
                return Carbon::parse($sale->created_at)->toDateString();
            })
            ->addColumn('actions', function ($sale) {
                return $sale->action_buttons;
            })
            ->make(true);
    }
}
