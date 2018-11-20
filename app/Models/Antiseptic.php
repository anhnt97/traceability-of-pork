<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antiseptic extends Model
{
    protected $fillable = [
        'batch_id', 'dose', 'insectiside', 'executor',
    ];

    public function batch()
    {
        return $this->hasOne('App\Models\Batch');
    }
}
