<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class BranchJob extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'branches_jobs';

    protected $fillable = [
        'branch_id',
        'job_id',
        'price',
        'price_sale',
        'duration'
    ];

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function job(){
        return $this->belongsTo(Job::class);
    }

}
