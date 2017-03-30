<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Branch extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'establishment_id',
        'phone', 
        'address', 
        'city',
        'state', 
        'zipcode'
    ];

    public function establishment(){
        return $this->belongsTo(Establishment::class);
    }

    public function branchImages(){
        return $this->hasMany(BranchImage::class);
    }

    public function branchUserFavorites(){
        return $this->belongsToMany(BranchFavorite::class, 'branch_favorites', 'branch_id', 'user_id')->withTimestamps();
    }

}