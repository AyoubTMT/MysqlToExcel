<?php

namespace App\Http\Controllers;

use App\Exports\InvoicesExport;
use Illuminate\Http\Request;
use DB;
use Excel;
use Response;
class ExportExcelController extends Controller
{
    function index()
    {
        $customer_data = DB::table('tbl_customer')->get();
        return view('export_excel')->with('customer_data', $customer_data);
    }

    function excel()
    {
        //return Excel::download(new \App\Exports\InvoicesExport, 'export.xlsx');
        //return (new \App\Exports\InvoicesExport)->download('export.xlsx');
        return (new InvoicesExport(50503))->download('export.xlsx');
        //return new \App\Exports\InvoicesExport()->except('id');
    }

    public function storeExcel() 
    {
        //$p = Excel::store(new \App\Exports\InvoicesExport, 'exports.xlsx', 'public');
        // Response::json($p);
        $p = (new InvoicesExport)->store('export.xlsx', 'public');
        Response::json($p);
    }

    public function loadtemplate(){
        Excel::import('template_orden_compra.xls', function($doc){ 
            $sheet = $doc->getActiveSheet(); 
            $sheet->setCellValue('A2', $user->name); 
        }) 
        ->store('xls', storage_path('Excel'));
    }
}
