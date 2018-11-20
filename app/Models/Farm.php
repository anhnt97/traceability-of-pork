<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $fillable = [
        'name', 'owner', 'address',
    ];

    public function batch()
    {
        return $this->hasMany('App\Models\Batch');
    }
}
