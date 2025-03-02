<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Membership extends Model
{
    use HasFactory;

    protected $table = 'memberships';

    protected $fillable = [
        'name', 
        'duration', 
        'price', 
        'status', 
        'description'
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function membershipHistory(): HasMany
    {
        return $this->hasMany(MembershipHistory::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
