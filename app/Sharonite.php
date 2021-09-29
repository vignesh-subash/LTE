<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Sharonite extends Model
{
    use SoftDeletes;


    public function setDobAttribute($value)
    {

      
      //  $this->attributes['dob'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');

      //  return \Carbon\Carbon::parse($date)->format('M d, Y');

      //return Carbon::parse($value)->diffForHumans();
    }
    //
    public function getDobAttribute($value)
    {

        return Carbon::createFromFormat('Y-m-d', $this->attributes['dob'])->format('d/m/Y');
        //return Carbon::parse($value)->diffForHumans();

    }


    protected $dates = [
      // 'dob',
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
