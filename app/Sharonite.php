<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Sharonite extends Model
{
    use SoftDeletes;

  //  protected $dateFormat = 'Y-m-d';

    // public function setDobAttribute($value)
    // {
    //
    // //    $this->attributes['dob'] = (new Carbon('d/m/Y', $value))->format('Y-m-d');
    //   //  $this->attributes['dob'] = Carbon::createFromFormat('d/m/Y', request('dob'))->format('Y-m-d');
    //
    //   //  return \Carbon\Carbon::parse($date)->format('M d, Y');
    //
    //   //return Carbon::parse($value)->diffForHumans();
    // }
    //

    protected $casts =['dob'];

  //  protected $dateFormat = 'd/m/Y';

    protected $dates = [
      'dob',
      'created_at',
      'updated_at',
      'deleted_at',
    ];

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = Carbon::createFromFormat('d/m/Y', $value);
      //$this->attributes['dob'] = Carbon::createFromFormat('dd/mm/YYYY', $value)->format('Y-m-d');
      // $this->attributes['dob'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    //  $this->attributes['dob'] = Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');

    }
    public function getDobAttribute($value)
    {

        //return Carbon::createFromFormat('Y-m-d', $this->attributes['date'])->format('d/m/Y');
        return Carbon::createFromFormat('Y-m-d', $this->attributes['dob'])->format('d/m/Y');
        //return Carbon::createFromFormat('d/m/Y', $this->attributes['dob'])->format('Y-m-d');
        //return Carbon::parse($value)->diffForHumans();

    }

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
