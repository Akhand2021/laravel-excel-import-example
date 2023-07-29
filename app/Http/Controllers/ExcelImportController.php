<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImportClass; 
use Illuminate\Http\Request;
use App\Models\Employee;

class ExcelImportController extends Controller
{
    public function importForm()
    {
        $data['employees'] = Employee::all();
        return view('upload',$data);
    }

    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls|max:2048', // Validate the file type and size
        ]);

        if ($request->hasFile('excel_file')) {
            $filePath = $request->file('excel_file')->store('temp'); // Store the uploaded file temporarily

            Excel::import(new ExcelImportClass, storage_path('app/' . $filePath));

            // Optionally, you can now delete the temporary file:
            unlink(storage_path('app/' . $filePath));

            return redirect()->back()->with('success', 'Excel file imported successfully!');
        }

        return redirect()->back()->with('error', 'No file was uploaded.');
    }
}
