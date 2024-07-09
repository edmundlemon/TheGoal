<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'car_id',
        'payment_id',
        'pickup_date',
        'return_date',
        'status',
        'pickup_location',
        'return_location',
    ];

    public function getOrders()
    {
        return $this->all();
    }

    public function getOrder($id)
    {
        return $this->find($id);
    }

    public function belongsToCustomer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function belongsToCar()
    {
        return $this->belongsTo(Car::class);
    }
}
