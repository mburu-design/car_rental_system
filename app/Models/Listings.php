<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Listings extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickup_date',
        'dropoff_date',
        'pickup_time',
        'dropoff_time',
        'pickup_location',
        'total_cost'
    ];

    public function fleet(): BelongsTo
    {
        return $this->belongsTo(Fleet::class);
    }
    public function carOwner(): BelongsTo
    {
        return $this->belongsTo(CarOwners::class);
    }
    public function rideRequest(): HasMany
    {
        return $this->hasMany(RideRequests::class);
    }
}
