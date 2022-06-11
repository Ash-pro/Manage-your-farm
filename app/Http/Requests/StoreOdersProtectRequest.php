<?php

namespace App\Http\Requests;

use App\Models\OdersProtect;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOdersProtectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('oders_protect_create');
    }

    public function rules()
    {
        return [
            'client_name' => [
                'string',
                'required',
            ],
            'client_phone' => [
                'string',
                'required',
            ],
            'client_address' => [
                'string',
                'required',
            ],
            'product_id' => [
                'required',
                'integer',
            ],
            'product_count' => [
                'string',
                'required',
            ],
        ];
    }
}
