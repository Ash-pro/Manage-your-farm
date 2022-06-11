@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.askConsultation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ask-consultations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.askConsultation.fields.id') }}
                        </th>
                        <td>
                            {{ $askConsultation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.askConsultation.fields.name') }}
                        </th>
                        <td>
                            {{ $askConsultation->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.askConsultation.fields.phone') }}
                        </th>
                        <td>
                            {{ $askConsultation->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.askConsultation.fields.adress') }}
                        </th>
                        <td>
                            {{ $askConsultation->adress }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.askConsultation.fields.id_number') }}
                        </th>
                        <td>
                            {{ $askConsultation->id_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.askConsultation.fields.your_problem') }}
                        </th>
                        <td>
                            {{ $askConsultation->your_problem }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ask-consultations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection