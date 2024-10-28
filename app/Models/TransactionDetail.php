<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransactionDetail extends Model
{
    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
        'subtotal'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function transactions(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
