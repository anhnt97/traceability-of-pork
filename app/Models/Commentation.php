<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentation extends Model
{
    protected $fillable = [
        'id','batch_id', 'user_id', 'import_cmt', 'feed_cmt', 'treatment_cmt', 'vaccination_cmt', 'handle_dead_pig_cmt', 'antiseptic_cmt','sell_cmt'
    ];
}
