<?php

namespace App\Http\Requests;

use App\Sharonite;
use Illuminate\Foundation\Http\FormRequest;

class StoreSharoniteRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('sharonite_create');
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
