<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function institution(){
        return $this->belongsTo(Institution::class);
    }
}
