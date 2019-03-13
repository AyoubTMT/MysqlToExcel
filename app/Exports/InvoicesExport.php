<?php
namespace App\Exports;
use App\customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Illuminate\Contracts\Support\Responsable;

use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;


use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;

// class InvoicesExport implements FromCollection , WithHeadings
// {
//     use Exportable;
    
//     public function collection()
//     {
//         return \App\customer::all();
//     }

//     public function headings(): array
//     {
//         return [
//             'id',
//             'CustomerName',
//             'Address',
//             'City',
//             'PostalCode',
//             'Country'
//         ];
//     }
// }


// class InvoicesExport implements FromCollection, Responsable
// {
//     use Exportable;
    
//     /**
//     * It's required to define the fileName within
//     * the export class when making use of Responsable.
//     */
//     private $fileName = 'exports.xlsx';

//     public function collection()
//     {
//         return \App\customer::all();
//     }
// }

class InvoicesExport implements FromQuery, WithHeadings, ShouldAutoSize, WithColumnFormatting//, WithMapping
{
    use Exportable;

    public function __construct(int $postalcode)
    {
        $this->postalcode = $postalcode;
    }

    public function query()
    {
        //return \App\customer::query();
        return customer::query()->where('postalcode',$this->postalcode);
    }

    // public function map($customer): array
    // {
    //     return [
    //         $customer->customername,
    //         $customer->city,
    //         $customer->postalcode
    //     ];
    // }

    /**
     * @return array
     */
    public function columnFormats(): array
    {
        return [
            'A' => '',
        ];
    }
    public function headings(): array
    {
        return [
            ' ',
            'id',
            'CustomerName',
            'Address',
            'City',
            'PostalCode',
            'Country'
        ];
    }
}

