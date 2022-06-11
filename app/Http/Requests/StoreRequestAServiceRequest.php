<?php

namespace App\Http\Requests;

use App\Models\RequestAService;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRequestAServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('request_a_service_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'nationalid' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'phone' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'homearea' => [
                'string',
                'required',
            ],
            'region' => [
                'string',
                'required',
            ],
            'service' => [
                'required',
            ],
        ];
    }
}
