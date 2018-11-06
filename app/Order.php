<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'rep_id');
    }

    public function county()
    {
        return $this->belongsTo(County::class,'county_id');
    }

    public function subcounty()
    {
        return $this->belongsTo(SubCounty::class,'subcounty_id');
    }
}
