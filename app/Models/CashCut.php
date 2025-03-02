<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CashCut extends Model
{
    use HasFactory;

    protected $table = 'cash_cuts';

    protected $fillable = [
        'shift_id',
        'cut_date',
        'total_cash',
        'total_card',
        'total_others',
        'total'
    ];

    public function shift(): BelongsTo
    {
        return $this->belongsTo(Shift::class);
    }
}
