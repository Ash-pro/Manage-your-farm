<?php

namespace App\Http\Requests;

use App\Models\AskConsultation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAskConsultationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ask_consultation_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'adress' => [
                'string',
                'required',
            ],
            'id_number' => [
                'string',
                'required',
            ],
            'your_problem' => [
                'string',
                'required',
            ],
        ];
    }
}
