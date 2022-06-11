@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.requestAService.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.request-a-services.update", [$requestAService->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.requestAService.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $requestAService->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestAService.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nationalid">{{ trans('cruds.requestAService.fields.nationalid') }}</label>
                <input class="form-control {{ $errors->has('nationalid') ? 'is-invalid' : '' }}" type="number" name="nationalid" id="nationalid" value="{{ old('nationalid', $requestAService->nationalid) }}" step="1" required>
                @if($errors->has('nationalid'))
                    <span class="text-danger">{{ $errors->first('nationalid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestAService.fields.nationalid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.requestAService.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="number" name="phone" id="phone" value="{{ old('phone', $requestAService->phone) }}" step="1" required>
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestAService.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="homearea">{{ trans('cruds.requestAService.fields.homearea') }}</label>
                <input class="form-control {{ $errors->has('homearea') ? 'is-invalid' : '' }}" type="text" name="homearea" id="homearea" value="{{ old('homearea', $requestAService->homearea) }}" required>
                @if($errors->has('homearea'))
                    <span class="text-danger">{{ $errors->first('homearea') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestAService.fields.homearea_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="region">{{ trans('cruds.requestAService.fields.region') }}</label>
                <input class="form-control {{ $errors->has('region') ? 'is-invalid' : '' }}" type="text" name="region" id="region" value="{{ old('region', $requestAService->region) }}" required>
                @if($errors->has('region'))
                    <span class="text-danger">{{ $errors->first('region') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestAService.fields.region_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.requestAService.fields.service') }}</label>
                <select class="form-control {{ $errors->has('service') ? 'is-invalid' : '' }}" name="service" id="service" required>
                    <option value disabled {{ old('service', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\RequestAService::SERVICE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('service', $requestAService->service) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('service'))
                    <span class="text-danger">{{ $errors->first('service') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestAService.fields.service_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection