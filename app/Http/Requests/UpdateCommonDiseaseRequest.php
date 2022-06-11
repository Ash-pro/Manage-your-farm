<?php

namespace App\Http\Requests;

use App\Models\CommonDisease;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCommonDiseaseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('common_disease_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
