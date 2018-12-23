<?php

namespace App\Repositories\Backend\Sale;

use DB;
use Carbon\Carbon;
use App\Models\Sale\Sale;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class SaleRepository.
 */
class SaleRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Sale::class;

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
                config('module.sales.table').'.id',
                config('module.sales.table').'.created_at',
                config('module.sales.table').'.updated_at',
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
        if (Sale::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.sales.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Sale $sale
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Sale $sale, array $input)
    {
    	if ($sale->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.sales.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Sale $sale
     * @throws GeneralException
     * @return bool
     */
    public function delete(Sale $sale)
    {
        if ($sale->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.sales.delete_error'));
    }
}
