<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pig extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'weight', 'status', 'qr_code',
    ];

    public function batch()
    {
        return $this->belongsTo('App\Models\Batch');
    }
}
