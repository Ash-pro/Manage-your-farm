<?php

namespace App\Http\Requests;

use App\Models\OdersProtect;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOdersProtectRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('oders_protect_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:oders_protects,id',
        ];
    }
}
