<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Exception;

class ExcelImportController extends Controller
{
    public function import_grades()
    {
        $file = $this->request->getFile('excel_file');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            try {
                $filePath = $file->getTempName();

                // Load the Excel file
                $spreadsheet = IOFactory::load($filePath);
                $sheet = $spreadsheet->getActiveSheet();
                $rows = $sheet->toArray();

                // Process the rows
                $data = [];
                foreach ($rows as $key => $row) {
                    // Skip the header row
                    if ($key === 0) {
                        continue;
                    }

                    $data[] = [
                        'name' => $row[0],
                        'email' => $row[1],
                        'phone' => $row[2],
                        // Add other fields based on your database table
                    ];
                }

                // Insert into the database
                $db = \Config\Database::connect();
                $builder = $db->table('users'); // Replace 'users' with your table name
                $builder->insertBatch($data);

                return redirect()->back()->with('success', 'Data imported successfully.');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Error reading the file: ' . $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'Invalid file uploaded.');
        }
    }
}
