<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'pig_id', 'drug_id', 'name', 'dose', 'doctor', 'reason', 'result', 'start_at', 'finish_at',
    ];

    public function pig()
    {
        return $this->hasOne('App\Models\Pig');
    }
}
