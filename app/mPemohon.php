<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mPemohon extends Model
{
    protected $guarded=['created_at','id'];

    public function perizinan(){
        return $this->hasMany(trPerizinanApotik::class);
    }
}
