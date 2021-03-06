<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'client_id',
        'coupon_id',
        'user_deliveryman_id', 
        'total', 
        'status',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function coupon(){
        return $this->belongsTo(Coupon::class);
    }

    public function items(){
        return $this->hasMany(OrderItem::class);
    }


    public function services(){
        return $this->hasMany(Service::class);
    }
}
