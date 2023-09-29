<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RideRequests extends Model
{
    use HasFactory;
    public function requestListing(): BelongsTo{
        return $this->belongsTo(Listings::class);
    }
    public function rider(): BelongsTo{
        return $this->belongsTo(Riders::class);
    }

    public function payment(): HasOne{
        return $this->hasOne(Payments::class);
    }
}
