<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'public_key',
        'property_type',
        'operation',
        'price',
        'state',
        'city',
        'neighborhood',
        'street',
        'property_number',
        'latitude',
        'longitude'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function amenities()
    {
        return $this->hasMany(PropertyAmenity::class);
    }

    public function galery()
    {
        return $this->hasMany(PropertyImage::class);
    }
}
