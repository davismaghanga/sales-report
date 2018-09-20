<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function subregions()
    {
        return $this->hasMany(Subregion::class);
    }
}
//wait
//
//i need a way of making sure that a particula r subregion belongs to a particular region. i have already added the region_id
//field to the subregion table

//PROCEED