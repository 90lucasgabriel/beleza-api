<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Presenters\EstablishmentPresenter;
use App\Repositories\EstablishmentRepository;
use App\Models\Establishment;
use App\Validators\EstablishmentValidator;

/**
 * Class EstablishmentRepositoryEloquent
 * @package namespace App\Repositories;
 */
class EstablishmentRepositoryEloquent extends BaseRepository implements EstablishmentRepository
{
    protected $skipPresenter = true;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Establishment::class;
    }

    public function lists($column, $key=null){
        return $this->model->lists($column, $key);
    }
    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function presenter(){
        return EstablishmentPresenter::class;
    }
}
