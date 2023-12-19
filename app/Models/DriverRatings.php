<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DriverRatings extends Model
{
    use HasFactory;
    protected $fillable = [
        'riders_id',
        'rater_id',
        'score',
        'review_comments',
    ];

    public function driverRater(): BelongsTo
    {
        return $this->belongsTo(CarOwners::class, 'rater_id');
    }
}
