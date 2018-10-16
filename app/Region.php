<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function counties()
    {
        return $this->hasMany(County::class);
    }

    public function subcounties()
    {
        return $this->hasMany(SubCounty::class);

    }

    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
}
//wait
//
//i need a way of making sure that a particula r subregion belongs to a particular region. i have already added the region_id
//field to the subregion table

//PROCEED