<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mAlatApotik extends Model
{
    protected $guarded = ['created_at', 'id'];

    public function trApotek ()

    {
        return $this->belongsTo(trPerizinanApotik::class);
    }
}
