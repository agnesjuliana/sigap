<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class HomeController extends Controller
{
    public function index()
    {
        $reports = Report::where('user_id', auth()->id())->paginate(10);
        return view('dashboard.user.home', compact('reports'));
    }
}
