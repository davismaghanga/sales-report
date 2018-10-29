<?php

namespace App\Imports;

use App\NyanzaSchool;
use Maatwebsite\Excel\Concerns\ToModel;

class NyanzaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NyanzaSchool([
            //
        ]);
    }
}
