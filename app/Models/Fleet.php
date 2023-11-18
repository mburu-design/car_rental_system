<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Fleet extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_registration_number',
        'insurance_provider',
        'insurace_policy_number',
        'category',
        'make',
        'model',
        'fuel_type',
        'year',
        'transmission_type',
        'exterior_front_image',
        'exterior_side_image',
        'exterior_rear_image',
        'interior_front_image',
        'interior_front_image',
        'number_of_doors',
        'number_of_seats',
        'number_of_doors'
    ];

    public function carOwner(): BelongsTo
    {
        return $this->belongsTo(CarOwners::class);
    }

    public function listing(): HasOne
    {
        return $this->hasOne(Listings::class);
    }
    public function rideRequest(): HasMany
    {
        return $this->hasMany(RideRequests::class);
    }
}
