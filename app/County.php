<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function subcounties()
    {
        return $this->hasMany(SubCounty::class);
    }
}
