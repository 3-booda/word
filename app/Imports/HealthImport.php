<?php

namespace App\Imports;

use App\Models\Health;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HealthImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new Health([
            'name' => $row['fullname'],
            'age' => $row['age_gen'],
            'gender' => $row['sex'],
            'job' => $row['occupattion'],
            'marital_status' => $row['maritalstatus'],
            'office' => $row['healthoffice'],
            'disease_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['reptdate_gen']),
            'entry_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['onsetdate']),
            'primary_diagnosis' => $row['disease'],
        ]);
        // return new Health([
            // 'name' => $row[],
            // 'age' => $row[6],
            // 'gender' => $row[5],
            // 'job' => $row[8],
            // 'marital_status' => $row[9],
            // 'office' => $row[3],
            // 'disease_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['reptdate_gen']),
            // 'entry_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['OnsetDate']),
            // 'primary_diagnosis' => $row[12],
        // ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }

    public function headingRow(): int
    {
        return 4;
    }
}
