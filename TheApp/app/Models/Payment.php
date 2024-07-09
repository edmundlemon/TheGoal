<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'payment_statement',
    ];

    public function getPayments()
    {
        return $this->all();
    }

    public function getPayment($id)
    {
        return $this->find($id);
    }

    public function belongsToOrder()
    {
        return $this->belongsTo(Order::class);
    }

}
