<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Sharonite extends Model
{
    use SoftDeletes;

    protected $casts =['dob', 'anniversary'];

    protected $dates = [
      'dob',
      'anniversary',
      'created_at',
      'updated_at',
      'deleted_at',
    ];

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = Carbon::createFromFormat('d/m/Y', $value);
        $this->attributes['anniversary'] = Carbon::createFromFormat('d/m/Y', $value);
    }

    public function getDobAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['dob'])->format('d/m/Y');
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
