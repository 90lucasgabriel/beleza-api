<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Presenters\BranchFavoritePresenter;
use App\Repositories\BranchFavoriteRepository;
use App\Models\BranchFavorite;
use App\Validators\BranchValidator;

/**
 * Class BranchFavoriteRepositoryEloquent
 * @package namespace App\Repositories;
 */
class BranchFavoriteRepositoryEloquent extends BaseRepository implements BranchRepository
{
    protected $skipPresenter = true;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BranchFavorite::class;
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
        return BranchFavoritePresenter::class;
    }
}
