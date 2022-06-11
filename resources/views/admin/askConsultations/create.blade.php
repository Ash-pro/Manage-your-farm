@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.askConsultation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ask-consultations.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.askConsultation.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.askConsultation.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.askConsultation.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.askConsultation.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="adress">{{ trans('cruds.askConsultation.fields.adress') }}</label>
                <input class="form-control {{ $errors->has('adress') ? 'is-invalid' : '' }}" type="text" name="adress" id="adress" value="{{ old('adress', '') }}" required>
                @if($errors->has('adress'))
                    <span class="text-danger">{{ $errors->first('adress') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.askConsultation.fields.adress_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="id_number">{{ trans('cruds.askConsultation.fields.id_number') }}</label>
                <input class="form-control {{ $errors->has('id_number') ? 'is-invalid' : '' }}" type="text" name="id_number" id="id_number" value="{{ old('id_number', '') }}" required>
                @if($errors->has('id_number'))
                    <span class="text-danger">{{ $errors->first('id_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.askConsultation.fields.id_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="your_problem">{{ trans('cruds.askConsultation.fields.your_problem') }}</label>
                <input class="form-control {{ $errors->has('your_problem') ? 'is-invalid' : '' }}" type="text" name="your_problem" id="your_problem" value="{{ old('your_problem', '') }}" required>
                @if($errors->has('your_problem'))
                    <span class="text-danger">{{ $errors->first('your_problem') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.askConsultation.fields.your_problem_helper') }}</span>
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