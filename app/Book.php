<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable = ['title','intended_age','book_type','price_excl_vat'];

}
