<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'amount', 'last_treatment', 'farm_id', 'import_id', 'breed', 'breed_description', 'origin';
    ];

    public function farm()
    {
        return $this->belongsTo('App\Models\Farm');
    }

    public function importInfo()
    {
        return $this->hasOne('App\Models\ImportInfo');
    }

    public function pig()
    {
        return $this->hasMany('App\Models\Pig');
    }

    public function feed()
    {
        return $this->hasMany('App\Models\Feed');
    }

    public function treatment()
    {
        return $this->hasMany('App\Models\Treatment');
    }

    public function handleDeadPig()
    {
        return $this->hasMany('App\Models\HandleDeadPig');
    }

    public function sell()
    {
        return $this->hasMany('App\Models\Sell');
    }

    public function vaccination()
    {
        return $this->hasMany('App\Models\Vaccination');
    }
}
