<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportInfo extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'amount', 'average_weight', 'last_treatment', 'drug', 'stop_drug_date', 'quarantine_place', 'receiver',
    ];

    public function batch()
    {
        return $this->hasOne('App\Models\Batch');
    }
}
