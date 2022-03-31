<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'status',
    ];

    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
