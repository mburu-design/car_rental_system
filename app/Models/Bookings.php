<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = [
        'ride_requests_id',
        'payments_id',
        'riders_id'
    ];
    public function riders(): BelongsTo
    {
        return $this->belongsTo(Riders::class, 'riders_id');
    }
    public function rideRequest(): BelongsTo
    {
        return $this->belongsTo(RideRequests::class, 'ride_requests_id');
    }
}
