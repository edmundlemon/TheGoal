<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'color',
        'price',
        'status',
        'image',
    ];

    public function getCars()
    {
        return $this->all();
    }

    public function getCar($id)
    {
        return $this->find($id);
    }

    public function hasOrders()
    {
        return $this->hasMany(Order::class);
    }
}
