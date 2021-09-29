<?php

namespace App\Imports;

use App\Sharonite;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

// class SharonitesImport implements ToModel, WithHeadingRow
class SharonitesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new Sharonite([$row]);
        return new Sharonite([
            // 'empName'         => $row['empName'],
            // 'designation'     => $row['designation'],
            // 'dob'             => $row['dob'],
            // 'anniversary'     => $row['anniversary'],
            // 'bloodGrooup'     => $row['bloodGrooup'],
            // 'officeNumber'    => $row['officeNumber'],
            // 'personalNumber'  => $row['personalNumber'],
            // 'officeEmail'     => $row['officeEmail'],
            // 'add1'            => $row['add1'],
            // 'add2'            => $row['add2'],
            // 'locality'        => $row['locality'],
            // 'city'            => $row['city'],
            // 'pincode'         => $row['pincode'],
            // 'cp1'             => $row['cp1'],
            // 'relationship1'   => $row['relationship1'],
            // 'cd1'             => $row['cd1'],
            // 'cp2'             => $row['cp2'],
            // 'relationship2'   => $row['relationship2'],
            // 'cd2'            => $row['cd2'],

            'empName'         => $row['0'],
            'designation'     => $row['1'],
            'dob'             => $row['2'],
            'anniversary'     => $row['3'],
            'bloodGrooup'     => $row['4'],
            'officeNumber'    => $row['5'],
            'personalNumber'  => $row['6'],
            'officeEmail'     => $row['7'],
            'add1'            => $row['8'],
            'add2'            => $row['9'],
            'locality'        => $row['10'],
            'city'            => $row['11'],
            'pincode'         => $row['12'],
            'cp1'             => $row['13'],
            'relationship1'   => $row['14'],
            'cd1'             => $row['15'],
            'cp2'             => $row['16'],
            'relationship2'   => $row['17'],
            'cd2'            => $row['18']
        ]);
    }

    
}
