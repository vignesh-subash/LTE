<?php

namespace App\Http\Requests;

use App\Sharonite;
use Illuminate\Foundation\Http\FormRequest;

class ImportSharoniteRequest extends FormRequest
{
  public function authorize()
  {
      return \Gate::allows('sharonite_import');
  }

  public function rules()
  {
    return [
      'empName' => [
        'required'
      ],
    ];
  }
}
