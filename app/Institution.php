<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
   }

    public function booklists()
    {
        return $this->hasMany(Booklist::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function subcounty()
    {
       return $this->belongsTo(SubCounty::class);
    }

    public function kyc()
    {
        return $this->hasOne(Kyc::class);
    }

    public function report()
    {
        return $this->hasOne(Report::class);
    }

}
