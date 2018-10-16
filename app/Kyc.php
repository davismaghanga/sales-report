<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
