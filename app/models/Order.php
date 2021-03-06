<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

    protected  $fillable = [
        'client_id',
        'user_deliveryman_id',
        'total',
        'status',
    ];

<<<<<<< HEAD
    public function transform()
    {
        return [
          'order' => $this->id,
          'order_item' => $this->items()
        ];
    }

=======
>>>>>>> 8338ce9c3cd850f2215745648192ff978e4be93f
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function deliveryman()
    {
        return $this->belongsTo(User::class, 'user_deliveryman_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
