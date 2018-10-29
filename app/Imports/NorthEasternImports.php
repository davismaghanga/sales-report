<?php

namespace App\Imports;

use App\NorthEasternSchool;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NorthEasternImports implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NorthEasternSchool([
            'name'=>$row['school'],
            'county'=>$row['county']
        ]);
    }
}
