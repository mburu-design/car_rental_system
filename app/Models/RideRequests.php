<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RideRequests extends Model
{
    use HasFactory;
    public function requestListing(): BelongsTo
    {
        return $this->belongsTo(Listings::class, 'listing_id');
    }

    public function fleet(): BelongsTo
    {
        return $this->belongsTo(Fleet::class, 'fleet_id');
    }
    public function rider(): BelongsTo
    {
        return $this->belongsTo(Riders::class, 'riders_id');
    }
    public function carOwner(): BelongsTo
    {
        return $this->belongsTo(CarOwners::class, 'car_owners_id');
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payments::class);
    }
    public function booking(): HasOne
    {
        return $this->hasOne(Bookings::class);
    }
}
