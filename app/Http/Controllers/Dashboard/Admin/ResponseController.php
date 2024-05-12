<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Response;
use App\Models\Report;

class ResponseController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'report_id' => 'required',
            'user_id' => 'required',
            'description' => 'required',
        ]);

        $report_id = $validatedData['report_id'];
        $user_id = $validatedData['user_id'];
        $description = $validatedData['description'];

        try {
            $response = new Response;
            $response->report_id = $report_id;
            $response->user_id = $user_id;
            $response->description = $description;
            $response->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add response');
        }

        try {
            $report = Report::find($report_id);
            $report->status = 'selesai';
            $report->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update report status');
        }

        return redirect()->route('admin.report')->with('success', 'Response added successfully');
    }
}
