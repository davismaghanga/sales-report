<?php
/**
 * Created by PhpStorm.
 * User: Davis Maghanga
 * Date: 14/10/2018
 * Time: 15:54
 */

namespace App\Exports;


use App\Institution;
use Carbon\Carbon;
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
    /**
     * @var string
     */
    private $date;

    public function __construct(int $region_id,string $date)
    {
        $this->region_id = $region_id;
        $this->date = $date;
    }


    /**
     * @return View
     */

    public function view(): View
    {
//        Carbon::parse();

        $start = Carbon::parse(trim(explode("-",$this->date)[0]));
        $stop = Carbon::parse(trim(explode("-",$this->date)[1]))->endOfDay() ;

        return view('exports.institutions', [
            'institutions' => Institution::where('region_id',$this->region_id)->whereBetween('created_at',[$start,$stop])->latest()->get(),
            'bookshops' => Institution::where('region_id',$this->region_id)
                ->where('type','Bookshop')
                ->whereBetween('created_at',[$start,$stop])->get()
        ]);
    }
}
