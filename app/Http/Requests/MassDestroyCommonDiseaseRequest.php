<?php

namespace App\Http\Requests;

use App\Models\CommonDisease;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCommonDiseaseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('common_disease_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:common_diseases,id',
        ];
    }
}
