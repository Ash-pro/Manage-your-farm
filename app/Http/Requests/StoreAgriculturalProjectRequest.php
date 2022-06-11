<?php

namespace App\Http\Requests;

use App\Models\AgriculturalProject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAgriculturalProjectRequest extends FormRequest
{
    public function authorize()
    {
//        return Gate::allows('agricultural_project_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'nationalid' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'required',
            ],
            'land_area' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'project_type' => [
                'required',
            ],
        ];
    }
}
