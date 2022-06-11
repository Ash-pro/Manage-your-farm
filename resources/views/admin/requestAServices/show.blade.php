@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.requestAService.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.request-a-services.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.requestAService.fields.id') }}
                        </th>
                        <td>
                            {{ $requestAService->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestAService.fields.name') }}
                        </th>
                        <td>
                            {{ $requestAService->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestAService.fields.nationalid') }}
                        </th>
                        <td>
                            {{ $requestAService->nationalid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestAService.fields.phone') }}
                        </th>
                        <td>
                            {{ $requestAService->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestAService.fields.homearea') }}
                        </th>
                        <td>
                            {{ $requestAService->homearea }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestAService.fields.region') }}
                        </th>
                        <td>
                            {{ $requestAService->region }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestAService.fields.service') }}
                        </th>
                        <td>
                            {{ App\Models\RequestAService::SERVICE_SELECT[$requestAService->service] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.request-a-services.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection