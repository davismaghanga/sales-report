<?php

namespace App\Imports;

use App\CoastSchool;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CoastImports implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CoastSchool([
            'name'=>$row['school'],
            'county'=>$row['county']
        ]);
    }
}
