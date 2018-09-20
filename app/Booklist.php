<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booklist extends Model
{
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
