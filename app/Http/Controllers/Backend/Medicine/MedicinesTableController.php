<?php

namespace App\Http\Controllers\Backend\Medicine;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Medicine\MedicineRepository;
use App\Http\Requests\Backend\Medicine\ManageMedicineRequest;

/**
 * Class MedicinesTableController.
 */
class MedicinesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var MedicineRepository
     */
    protected $medicine;

    /**
     * contructor to initialize repository object
     * @param MedicineRepository $medicine;
     */
    public function __construct(MedicineRepository $medicine)
    {
        $this->medicine = $medicine;
    }

    /**
     * This method return the data of the model
     * @param ManageMedicineRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageMedicineRequest $request)
    {
        return Datatables::of($this->medicine->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($medicine) {
                return Carbon::parse($medicine->created_at)->toDateString();
            })
            ->addColumn('actions', function ($medicine) {
                return $medicine->action_buttons;
            })
            ->make(true);
    }
}
