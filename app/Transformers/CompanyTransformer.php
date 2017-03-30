<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Company;
use Illuminate\Database\Eloquent\Collection;

class CompanyTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['branches'];

    public function transform(Company $model)
    {
        return [
            'id'            => (int) $model->id,
            'name'          => $model->name,
            'description'   => $model->description,
            'image'         => $model->image,
            'site'          => $model->site,
            //'created_at'    => $model->created_at,
            //'updated_at'    => $model->updated_at
        ];
    }

    
    public function includeBranches(Company $model){
        return $this->collection($model->branches, new BranchTransformer());
    }
    

}