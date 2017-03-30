<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\BranchFavorite;
use Illuminate\Database\Eloquent\Collection;

class BranchFavoriteTransformer extends TransformerAbstract
{
    //protected $defaultIncludes   = ['establishment'];
    protected $availableIncludes = ['users', 'branches'];

    public function transform(BranchFavorite $model)
    {
        return [
            'user_id'            => (int) $model->user_id,
            'branch_id'          => (int) $model->branch_id,            
        ];
    }


    public function includeUsers(BranchFavorite $model){
         return $this->collection($model->users, new UserTransformer());
    }

    public function includeBranches(BranchFavorite $model){
        return $this->collection($model->branches, new BranchTransformer());
    }


}