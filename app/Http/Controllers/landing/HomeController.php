<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\ReportFile;

class HomeController extends Controller
{
    public function index()
    {
        $reports = Report::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('landing.welcome', compact('reports'));
    }
}
