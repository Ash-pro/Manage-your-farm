<?php

namespace App\Http\Requests;

use App\Models\CommonDisease;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCommonDiseaseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('common_disease_create');
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
