<?php

namespace App\Http\Controllers;

use App\Exports\LeadersExport;
use App\Models\Leader;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class LeadersExportController extends Controller
{
    public function exportXLSX($id)
    {
        return Excel::download(new LeadersExport($id), "$id-Leaders.xlsx");
    }

    public function exportCSV($id)
    {
        return Excel::download(new LeadersExport($id), "$id-Leaders.csv");
    }

    public function exportXLS($id)
    {
        return Excel::download(new LeadersExport($id), "$id-Leaders.xls");
    }

    public function exportPDF()
    {
        ini_set('max_execution_time', 300);
        ini_set("memory_limit", "512M");
        $data = Leader::all();
        // echo $data;
        $pdf = PDF::loadView('leaders', ['data' => $data]);
        return $pdf->stream('document.pdf');
    }
}
