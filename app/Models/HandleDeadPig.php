<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HandleDeadPig extends Model
{
    protected $fillable = [
        'batch_id', 'amount', 'symptom', 'vestige', 'executor', 'solution',
    ];

    public function batch()
    {
        return $this->hasOne('App\Models\Batch');
    }
}
