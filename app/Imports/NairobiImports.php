<?php

namespace App\Imports;

use App\NairobiSchool;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NairobiImports implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NairobiSchool([
            'name'=>$row['school'],
            'county'=>$row['county']
        ]);
    }
}
