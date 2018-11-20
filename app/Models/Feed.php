<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = [
        'batch_id', 'food_id', 'mix_id', 'mass', 'feeder',
    ];

    public function batch()
    {
        return $this->hasOne('App\Models\Batch');
    }
}
