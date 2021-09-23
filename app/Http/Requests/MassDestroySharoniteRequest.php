<?php

namespace App\Http\Requests;

use App\Sharonite;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroySharoniteRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('sharonite_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sharonite,id',
        ];
    }
}
