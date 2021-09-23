<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sharonite extends Model
{
    use SoftDeletes;

    protected $date = [
      'created_at',
      'updated_at',
      'deleted_at',
    ];

    protected $fillable = [
      'empName',
      'designation',
      'dob',
      'anniversary',
      'bloodGrooup',
      'officeNumber',
      'personalNumber',
      'officeEmail',
      'add1',
      'add2',
      'locality',
      'city',
      'pincode',
      'cp1',
      'relationship1',
      'cd1',
      'cp2',
      'relationship2',
      'cd2',
    ];
}
