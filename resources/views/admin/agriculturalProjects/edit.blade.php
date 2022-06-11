@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.agriculturalProject.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.agricultural-projects.update", [$agriculturalProject->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.agriculturalProject.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $agriculturalProject->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agriculturalProject.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nationalid">{{ trans('cruds.agriculturalProject.fields.nationalid') }}</label>
                <input class="form-control {{ $errors->has('nationalid') ? 'is-invalid' : '' }}" type="text" name="nationalid" id="nationalid" value="{{ old('nationalid', $agriculturalProject->nationalid) }}" required>
                @if($errors->has('nationalid'))
                    <span class="text-danger">{{ $errors->first('nationalid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agriculturalProject.fields.nationalid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.agriculturalProject.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $agriculturalProject->phone) }}" required>
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agriculturalProject.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.agriculturalProject.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $agriculturalProject->address) }}" required>
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agriculturalProject.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="land_area">{{ trans('cruds.agriculturalProject.fields.land_area') }}</label>
                <input class="form-control {{ $errors->has('land_area') ? 'is-invalid' : '' }}" type="number" name="land_area" id="land_area" value="{{ old('land_area', $agriculturalProject->land_area) }}" step="1" required>
                @if($errors->has('land_area'))
                    <span class="text-danger">{{ $errors->first('land_area') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agriculturalProject.fields.land_area_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.agriculturalProject.fields.project_type') }}</label>
                <select class="form-control {{ $errors->has('project_type') ? 'is-invalid' : '' }}" name="project_type" id="project_type" required>
                    <option value disabled {{ old('project_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AgriculturalProject::PROJECT_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('project_type', $agriculturalProject->project_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('project_type'))
                    <span class="text-danger">{{ $errors->first('project_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agriculturalProject.fields.project_type_helper') }}</span>
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