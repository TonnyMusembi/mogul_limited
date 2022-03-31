<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_id',
        'status'
    ];

    public function orders() {
        return $this->hasMany(Order::class);
    }

}
