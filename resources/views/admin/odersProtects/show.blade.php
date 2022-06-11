@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.odersProtect.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.oders-protects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.odersProtect.fields.id') }}
                        </th>
                        <td>
                            {{ $odersProtect->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.odersProtect.fields.client_name') }}
                        </th>
                        <td>
                            {{ $odersProtect->client_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.odersProtect.fields.client_phone') }}
                        </th>
                        <td>
                            {{ $odersProtect->client_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.odersProtect.fields.client_address') }}
                        </th>
                        <td>
                            {{ $odersProtect->client_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.odersProtect.fields.product') }}
                        </th>
                        <td>
                            {{ $odersProtect->product->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.odersProtect.fields.product_count') }}
                        </th>
                        <td>
                            {{ $odersProtect->product_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.odersProtect.fields.notes') }}
                        </th>
                        <td>
                            {!! $odersProtect->notes !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.oders-protects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection