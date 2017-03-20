<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Establishment;
use Illuminate\Database\Eloquent\Collection;

class EstablishmentTransformer extends TransformerAbstract
{
    //protected $availableIncludes = ['branches'];

    public function transform(Establishment $model)
    {
        return [
            'id'            => (int) $model->id,
            'name'          => $model->name,
            'description'   => $model->description,
            'image'         => $model->image,
            'created_at'    => $model->created_at,
            'updated_at'    => $model->updated_at
        ];
    }

    /*
    public function includeBranches(Establishment $model){
        return $this->collection($model->branches, new BranchTransformer());
    }
    */

}