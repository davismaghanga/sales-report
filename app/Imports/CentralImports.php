<?php

namespace App\Imports;

use App\CentralSchool;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CentralImports implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CentralSchool([
            'name'=>$row['school'],
            'county'=>$row['county']
        ]);
    }
}
