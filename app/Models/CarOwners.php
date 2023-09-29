<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarOwners extends Model
{
    use HasFactory;
    protected $fillable = [

        'ID_number',
        'payment_phone'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function car(): HasMany{
        return $this->hasMany(Fleet::class);
    }
}
