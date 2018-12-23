<?php

namespace App\Repositories\Backend\Medicinecategory;

use DB;
use Carbon\Carbon;
use App\Models\Medicinecategory\Medicinecategory;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class MedicinecategoryRepository.
 */
class MedicinecategoryRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Medicinecategory::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.medicinecategories.table').'.id',
                config('module.medicinecategories.table').'.name',
                config('module.medicinecategories.table').'.created_by',
                config('module.medicinecategories.table').'.created_at',
                config('module.medicinecategories.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $input['created_by'] = Auth::id();
        if (Medicinecategory::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.medicinecategories.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Medicinecategory $medicinecategory
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Medicinecategory $medicinecategory, array $input)
    {
    	if ($medicinecategory->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.medicinecategories.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Medicinecategory $medicinecategory
     * @throws GeneralException
     * @return bool
     */
    public function delete(Medicinecategory $medicinecategory)
    {
        if ($medicinecategory->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.medicinecategories.delete_error'));
    }
}
