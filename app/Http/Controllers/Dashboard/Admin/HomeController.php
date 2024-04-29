<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class HomeController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('dashboard.admin.home', compact('reports'));
    }
}
