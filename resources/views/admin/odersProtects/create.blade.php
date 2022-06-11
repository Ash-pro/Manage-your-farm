@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.odersProtect.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.oders-protects.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="client_name">{{ trans('cruds.odersProtect.fields.client_name') }}</label>
                <input class="form-control {{ $errors->has('client_name') ? 'is-invalid' : '' }}" type="text" name="client_name" id="client_name" value="{{ old('client_name', '') }}" required>
                @if($errors->has('client_name'))
                    <span class="text-danger">{{ $errors->first('client_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.odersProtect.fields.client_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="client_phone">{{ trans('cruds.odersProtect.fields.client_phone') }}</label>
                <input class="form-control {{ $errors->has('client_phone') ? 'is-invalid' : '' }}" type="text" name="client_phone" id="client_phone" value="{{ old('client_phone', '') }}" required>
                @if($errors->has('client_phone'))
                    <span class="text-danger">{{ $errors->first('client_phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.odersProtect.fields.client_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="client_address">{{ trans('cruds.odersProtect.fields.client_address') }}</label>
                <input class="form-control {{ $errors->has('client_address') ? 'is-invalid' : '' }}" type="text" name="client_address" id="client_address" value="{{ old('client_address', '') }}" required>
                @if($errors->has('client_address'))
                    <span class="text-danger">{{ $errors->first('client_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.odersProtect.fields.client_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="product_id">{{ trans('cruds.odersProtect.fields.product') }}</label>
                <select class="form-control select2 {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id" id="product_id" required>
                    @foreach($products as $id => $entry)
                        <option value="{{ $id }}" {{ old('product_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('product'))
                    <span class="text-danger">{{ $errors->first('product') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.odersProtect.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="product_count">{{ trans('cruds.odersProtect.fields.product_count') }}</label>
                <input class="form-control {{ $errors->has('product_count') ? 'is-invalid' : '' }}" type="text" name="product_count" id="product_count" value="{{ old('product_count', '') }}" required>
                @if($errors->has('product_count'))
                    <span class="text-danger">{{ $errors->first('product_count') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.odersProtect.fields.product_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.odersProtect.fields.notes') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{!! old('notes') !!}</textarea>
                @if($errors->has('notes'))
                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.odersProtect.fields.notes_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.oders-protects.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $odersProtect->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection