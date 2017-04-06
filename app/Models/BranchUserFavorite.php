<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class BranchUserFavorite extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'branches_users_favorites';
    
    protected $fillable = [
        'branch_id',
        'user_id'
    ];

}
