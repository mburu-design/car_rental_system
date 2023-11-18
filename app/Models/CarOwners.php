<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarOwners extends Model
{
    use HasFactory;
    protected $fillable = [

        'ID_number',
        'payment_phone'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function car(): HasMany
    {
        return $this->hasMany(Fleet::class);
    }
    public function rideRequest(): HasOne
    {
        return $this->hasOne(RideRequests::class);
    }
    public function listings(): HasMany
    {
        return $this->hasMany(Listings::class, 'car_owners_id');
    }
}
