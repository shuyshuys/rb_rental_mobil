<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'manufacture_id',
        'name',
        'license_number',
        'color',
        'year',
        'status',
        'price',
        'penalty',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'manufacture_id' => 'integer',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function carImages()
    {
        return $this->hasMany(CarImage::class);
    }

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }
}