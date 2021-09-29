<?php

namespace App\Http\Requests;

use App\Sharonite;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSharoniteRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('sharonite_edit');
    }

    public function rules()
    {
        return [
            'empName' => [
                'required',
            ],
        ];
    }
}
