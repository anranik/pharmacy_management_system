<?php

namespace App\Repositories\Backend\Manufacturer;

use DB;
use Carbon\Carbon;
use App\Models\Manufacturer\Manufacturer;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class ManufacturerRepository.
 */
class ManufacturerRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Manufacturer::class;

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
                config('module.manufacturers.table').'.id',
                config('module.manufacturers.table').'.created_at',
                config('module.manufacturers.table').'.updated_at',
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
        $input['created_by']= Auth::id();
        if (Manufacturer::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.manufacturers.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Manufacturer $manufacturer
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Manufacturer $manufacturer, array $input)
    {
    	if ($manufacturer->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.manufacturers.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Manufacturer $manufacturer
     * @throws GeneralException
     * @return bool
     */
    public function delete(Manufacturer $manufacturer)
    {
        if ($manufacturer->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.manufacturers.delete_error'));
    }
}
