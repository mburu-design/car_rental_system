<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Riders extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_number',
        'driver_license_number',
        'payment_phone'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function requests(): HasMany
    {
        return $this->hasMany(RideRequests::class);
    }
    public function booking(): HasMany
    {
        return $this->hasMany(Bookings::class);
    }
}
