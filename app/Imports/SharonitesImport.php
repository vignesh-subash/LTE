<?php

namespace App\Imports;

use App\Sharonite;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

// class SharonitesImport implements ToModel, WithHeadingRow
class SharonitesImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //
    //     return new Sharonite([
    //         'empName'         => $row['1'],
    //         'designation'     => $row['2'],
    //         'dob'             => $row['3'],
    //         'anniversary'     => $row['4'],
    //         'bloodGrooup'     => $row['5'],
    //         'officeNumber'    => $row['6'],
    //         'personalNumber'  => $row['7'],
    //         'officeEmail'     => $row['8'],
    //         'add1'            => $row['9'],
    //         'add2'            => $row['10'],
    //         'locality'        => $row['11'],
    //         'city'            => $row['12'],
    //         'pincode'         => $row['13'],
    //         'cp1'             => $row['14'],
    //         'relationship1'   => $row['15'],
    //         'cd1'             => $row['16'],
    //         'cp2'             => $row['17'],
    //         'relationship2'   => $row['18'],
    //         'cd2'             => $row['19'],
    //     ]);
    // }


    public function collection(Collection $rows)
    {
      foreach ($rows as $row) {
        sharonite::create([
          'empName'         => $row['1'],
          'designation'     => $row['2'],
          'dob'             => $row['3'],
          'anniversary'     => $row['4'],
          'bloodGrooup'     => $row['5'],
          'officeNumber'    => $row['6'],
          'personalNumber'  => $row['7'],
          'officeEmail'     => $row['8'],
          'add1'            => $row['9'],
          'add2'            => $row['10'],
          'locality'        => $row['11'],
          'city'            => $row['12'],
          'pincode'         => $row['13'],
          'cp1'             => $row['14'],
          'relationship1'   => $row['15'],
          'cd1'             => $row['16'],
          'cp2'             => $row['17'],
          'relationship2'   => $row['18'],
          'cd2'             => $row['19'],
        ]);
      }

    }

}
