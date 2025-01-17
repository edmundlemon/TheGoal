<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'message',
        'rating',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
