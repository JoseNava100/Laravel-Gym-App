<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inventary extends Model
{
    use HasFactory;

    protected $table = 'inventories';

    protected $fillable = [
        'name',
        'quantity',
        'category',
        'cost_price'
    ];

    public function salesDetails(): HasMany
    {
        return $this->hasMany(SalesDetail::class);
    }
}
