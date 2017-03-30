<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Company extends Model implements Transformable
{
    use TransformableTrait;
    
    protected $fillable = [
        'name',
        'cnpj',
        'description',
        'image',
        'site'
    ];

    public function branches(){
        return $this->hasMany(Branch::class);
    }
}
