<?php

namespace App\Imports;

use App\RiftSchool;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RiftImports implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RiftSchool([
            'name' =>$row['school'],
            'county'=>$row['county'],


        ]);
    }
}
