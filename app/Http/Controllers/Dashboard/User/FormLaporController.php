<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Report;
use App\Models\ReportFile;
use Illuminate\Http\Request;

class FormLaporController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('dashboard.user.form-lapor', compact('types'));
    }


    public function store(Request $request)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'type' => 'required',
            'description' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'address' => 'required',
            'image' => 'required|image', // Assuming image upload
        ]);


        // Store the report data in the database
        $report = new Report();
        $report->user_id = auth()->id(); // Assuming you're using Laravel authentication
        $report->type_id = $validatedData['type']; // Assuming type_id is passed in the request
        $report->description = $validatedData['description'];
        $report->longitude = $validatedData['longitude'];
        $report->latitude = $validatedData['latitude'];
        $report->address = $validatedData['address'];
        $report->status = 'Pending'; // Assuming default status is 'Pending'
        $report->save();

        // Handle image upload and store file path in report_files table
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/report_images');
            $finalImagePath = preg_replace('/^public\//', '', $imagePath);

            // Check if image upload failed
            if (!$imagePath) {
                return redirect()->back()->with('error', 'Failed to upload image.');
            }

            $reportFile = new ReportFile();
            $reportFile->report_id = $report->report_id;
            $reportFile->img_path = $finalImagePath;
            $reportFile->save();
        } else {
            return redirect()->back()->with('error', 'No image uploaded.');
        }

        // Optionally, you can redirect the user after successful submission
        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }
}
