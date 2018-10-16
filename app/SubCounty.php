<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
