<?php

namespace App\Imports;

use App\EasternSchool;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EasternImports implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EasternSchool([
            'name'=>$row['school'],
            'county'=>$row['county']
        ]);
    }
}
