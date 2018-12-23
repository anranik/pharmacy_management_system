<?php

namespace App\Repositories\Backend\Medicine;

use DB;
use Carbon\Carbon;
use App\Models\Medicine\Medicine;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class MedicineRepository.
 */
class MedicineRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Medicine::class;

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
                config('module.medicines.table').'.id',
                config('module.medicines.table').'.name',
                config('module.medicines.table').'.generic_name',
                config('module.medicines.table').'.type',
                config('module.medicines.table').'.purchase_price',
                config('module.medicines.table').'.sell_price',
                config('module.medicines.table').'.total_unit',
                config('module.medicines.table').'.current_unit',
                config('module.medicines.table').'.updated_at',
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

        $input['current_unit'] = $input['total_unit'];
        $input['created_by'] = Auth::id();

        if (Medicine::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.medicines.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Medicine $medicine
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Medicine $medicine, array $input)
    {
    	if ($medicine->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.medicines.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Medicine $medicine
     * @throws GeneralException
     * @return bool
     */
    public function delete(Medicine $medicine)
    {
        if ($medicine->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.medicines.delete_error'));
    }
}
