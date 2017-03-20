<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Establishment extends Model implements Transformable
{
    use TransformableTrait;
    
    protected $fillable = [
        'name',
        'cnpj',
        'description',
        'image'
    ];

    public function branches(){
        return $this->hasMany(Branch::class);
    }
}
