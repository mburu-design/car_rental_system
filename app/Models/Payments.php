<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_method',
        'amount',

    ];

    public function rideRequest(): BelongsTo
    {
        return $this->belongsTo(RideRequests::class, 'ride_requests_id');
    }
    //     public function booking():BelongsTo{
    // return $this->belongsTo(Bookings::class,'')

}
