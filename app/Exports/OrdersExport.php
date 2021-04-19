<?php

namespace App\Exports;

use App\Http\Filters\OrderFilter;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    use Exportable;

    public $request;


    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function collection()
    {
        $from =  Carbon::parse($this->request['date'][0])->toDateString();
        $to = Carbon::parse($this->request['date'][1])->toDateString();

        return Order::select('name','phone','summa','city')->whereDate('created_at','>=', $from)->whereDate('created_at','<=', $to)->orderByDesc('created_at')->get()->unique('phone');
    }

    public function headings(): array
    {
        return [
            'ФИО',
            'Телефон',
            'Требуемая сумма',
            'Город'
        ];
    }
}
