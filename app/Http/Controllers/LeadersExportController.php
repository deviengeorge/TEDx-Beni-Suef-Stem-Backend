<?php

namespace App\Http\Controllers;

use App\Exports\LeadersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LeadersExportController extends Controller
{
    public function exportXLSX(Request $request, $id)
    {
        return Excel::download(new LeadersExport($id), "$id-Leaders.xlsx");
    }

    public function exportCSV(Request $request, $id)
    {
        return Excel::download(new LeadersExport($id), "$id-Leaders.csv");
    }

    public function exportXLS(Request $request, $id)
    {
        return Excel::download(new LeadersExport($id), "$id-Leaders.xls");
    }
}
