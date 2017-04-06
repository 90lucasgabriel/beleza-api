<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class BranchJobEmployee extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'branch_job_id',
        'employee_id'
    ];

    public function employee(){
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }



}
