<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Collection;

class BranchTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['establishment'];

    public function transform(Branch $model)
    {
        return [
            'id'            => (int) $model->id,
            'phone'         => $model->phone,
            'address'       => $model->address,
            'city'          => $model->city,
            'state'         => $model->state,
            'zipcode'       => $model->zipcode,
            'created_at'    => $model->created_at,
            'updated_at'    => $model->updated_at
        ];
    }


    public function includeEstablishment(Branch $model){
         return $this->item($model->establishment, new EstablishmentTransformer());
    }

}