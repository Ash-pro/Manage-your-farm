<?php

namespace App\Http\Requests;

use App\Models\ContactUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_us_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'min:2',
                'required',
            ],
            'email' => [
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'message' => [
                'required',
            ],
        ];
    }
}
