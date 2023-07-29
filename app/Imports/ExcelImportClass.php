<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Employee; // Import the Employee model

class ExcelImportClass implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // Initialize a variable to keep track of the row index
        $rowIndex = 0;

        foreach ($rows as $row) {
            // Skip the first row
            if ($rowIndex == 0) {
                $rowIndex++;
                continue;
            }

            // Assuming the columns in the Excel file are in order: 'name', 'email', 'phone'
            Employee::create([
                'name' => $row[0], 
                'email' => $row[1], 
                'phone' => $row[2], 
            ]);

            $rowIndex++;
        }
    }
}
