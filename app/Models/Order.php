<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded=[];

   
    const PENDING='pending';
    const CONFIRM='confirm';
    const PROCESSING='processing';
    const DISPATCH='dispatch';
    const RETURN='return';
    const CANCEL='cancel';
    const REFUND='refund';
    const SUCCESS='success';


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id')->withTrashed();
    }

    public function deliveryMan()
    {
        return $this->belongsTo(User::class, 'delivery_id', 'id');
    }

    public function pickupMan()
    {
        return $this->belongsTo(User::class, 'pickup_id', 'id');
    }

    public function details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }
    public function review_rating()
    {
        return $this->hasOne(ReviewRatings::class, 'order_id');
    }



}
