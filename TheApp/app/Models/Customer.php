<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable  
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'birth_date',
        'gender'
    ];

    protected $hidden = [
        'password'
    ];

    public function getCustomers()
    {
        return $this->all();
    }

    public function getCustomer($id)
    {
        return $this->find($id);
    }

    public function hasOrders()
    {
        return $this->hasMany(Order::class);
    }
}
