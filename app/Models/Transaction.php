<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'car_id',
        'invoice_no',
        'rent_date',
        'back_date',
        'return_date',
        'price',
        'amount',
        'penalty',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'car_id' => 'integer',
        'rent_date' => 'datetime',
        'back_date' => 'datetime',
        'return_date' => 'datetime',
        'deleted_at' => 'timestamp',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
