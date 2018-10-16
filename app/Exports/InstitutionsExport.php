<?php
/**
 * Created by PhpStorm.
 * User: Davis Maghanga
 * Date: 14/10/2018
 * Time: 15:54
 */

namespace App\Exports;


use App\Institution;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;

class InstitutionsExport implements FromView
{
    use Exportable;
    /**
     * @var int
     */
    private $region_id;

    public function __construct(int $region_id)
    {
        $this->region_id = $region_id;
    }


    /**
     * @return View
     */

    public function view(): View
    {
        return view('exports.institutions', [
            'institutions' => Institution::where('region_id',$this->region_id)->latest()->get()
        ]);
    }
}