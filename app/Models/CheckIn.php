<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckIn extends Model
{
    use HasFactory;

    protected $table = 'check_ins';

    protected $fillable = [
        'user_id',
        'customer_id',
        'check_in',
        'valid',
        'method',
        'membership_history_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function membershipHistory(): BelongsTo
    {
        return $this->belongsTo(MembershipHistory::class);
    }
}
