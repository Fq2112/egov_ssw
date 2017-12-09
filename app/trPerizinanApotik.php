<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trPerizinanApotik extends Model
{
    protected $guarded = ['created_at', 'id'];

    public function mPemohon ()

    {
        return $this->belongsTo(mPemohon::class);
    }
    public function mAlat ()

    {
        return $this->hasMany(mAlatApotik::class);
    }
}
