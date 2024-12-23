<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'num_subscriptions',
    ];

    public function subscriptions(): HasMany
    {
        return $this->hasMany(ClubSubscription::class);
    }
}