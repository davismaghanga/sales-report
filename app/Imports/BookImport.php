<?php

namespace App\Imports;

use App\Book;
//use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BookImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'title'=>$row['title'],
            'intended_age'=>$row['intended_age'],
            'book_type'=>$row['book_type'],
            'price_excl_vat'=>$row['retail_price']
        ]);
    }
}
