<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'batch_id', 'amount', 'seller', 'buyer', 'buyer_address', 'last_treatment', 'sell_at',
    ];

    public function batch()
    {
        return $this->hasOne('App\Models\Batch');
    }
}
