@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.agriculturalProject.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agricultural-projects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.id') }}
                        </th>
                        <td>
                            {{ $agriculturalProject->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.name') }}
                        </th>
                        <td>
                            {{ $agriculturalProject->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.nationalid') }}
                        </th>
                        <td>
                            {{ $agriculturalProject->nationalid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.phone') }}
                        </th>
                        <td>
                            {{ $agriculturalProject->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.address') }}
                        </th>
                        <td>
                            {{ $agriculturalProject->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.land_area') }}
                        </th>
                        <td>
                            {{ $agriculturalProject->land_area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.project_type') }}
                        </th>
                        <td>
                            {{ App\Models\AgriculturalProject::PROJECT_TYPE_SELECT[$agriculturalProject->project_type] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agricultural-projects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection