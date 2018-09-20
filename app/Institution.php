<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function person()
    {
        return $this->hasOne(ContactPerson::class);
    }

    public function booklists()
    {
        return $this->hasMany(Booklist::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function subregion()
    {
        return $this->belongsTo(Subregion::class);
    }
}
