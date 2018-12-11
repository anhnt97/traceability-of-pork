<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antiseptic extends Model
{
    protected $table = 'antiseptic';
    protected $fillable = [
        'batch_id', 'dose', 'insecticide', 'executor','equipment_id','executor'
    ];

    public function batch()
    {
        return $this->hasOne('App\Models\Batch');
    }
}
