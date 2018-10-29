<?php

namespace App\Imports;

use App\WesternSchool;
use Maatwebsite\Excel\Concerns\ToModel;

class WesternImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new WesternSchool([
            //
        ]);
    }
}
