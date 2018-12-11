<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $fillable = [
        'name', 'dose', 'doctor', 'purpose', 'result','batch_id'
    ];

    public function batch()
    {
        return $this->hasOne('App\Models\Batch');
    }
}
