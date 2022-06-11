<?php

namespace App\Http\Requests;

use App\Models\AgriculturalProject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAgriculturalProjectRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('agricultural_project_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:agricultural_projects,id',
        ];
    }
}
