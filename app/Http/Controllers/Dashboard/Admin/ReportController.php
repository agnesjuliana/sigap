<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Dompdf\Dompdf;

class ReportController extends Controller
{
    public function index()
    {
        $perPage = 7;
    
        $reports = Report::with(['type', 'user', 'reportFile', 'responses.user'])
            ->orderBy('status')
            ->paginate($perPage);
    
        return view('dashboard.admin.report', compact('reports'));
    }

    public function generateReport()
    {
        $reports = Report::all();

        $pdf = new Dompdf();
        $pdf->loadHtml(view('reports.pdf', compact('reports')));

        $pdf->setPaper('A4', 'landscape');

        $pdf->render();

        return $pdf->stream('report.pdf');
    }
}
