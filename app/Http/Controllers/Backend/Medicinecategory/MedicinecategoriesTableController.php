<?php

namespace App\Http\Controllers\Backend\Medicinecategory;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Medicinecategory\MedicinecategoryRepository;
use App\Http\Requests\Backend\Medicinecategory\ManageMedicinecategoryRequest;

/**
 * Class MedicinecategoriesTableController.
 */
class MedicinecategoriesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var MedicinecategoryRepository
     */
    protected $medicinecategory;

    /**
     * contructor to initialize repository object
     * @param MedicinecategoryRepository $medicinecategory;
     */
    public function __construct(MedicinecategoryRepository $medicinecategory)
    {
        $this->medicinecategory = $medicinecategory;
    }

    /**
     * This method return the data of the model
     * @param ManageMedicinecategoryRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageMedicinecategoryRequest $request)
    {
        return Datatables::of($this->medicinecategory->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($medicinecategory) {
                return Carbon::parse($medicinecategory->created_at)->toDateString();
            })
            ->addColumn('actions', function ($medicinecategory) {
                return $medicinecategory->action_buttons;
            })
            ->make(true);
    }
}
