@extends('layouts.admin')
@section('content')
@can('request_a_service_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.request-a-services.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.requestAService.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.requestAService.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-RequestAService">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.requestAService.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestAService.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestAService.fields.nationalid') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestAService.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestAService.fields.homearea') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestAService.fields.region') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestAService.fields.service') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\RequestAService::SERVICE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requestAServices as $key => $requestAService)
                        <tr data-entry-id="{{ $requestAService->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $requestAService->id ?? '' }}
                            </td>
                            <td>
                                {{ $requestAService->name ?? '' }}
                            </td>
                            <td>
                                {{ $requestAService->nationalid ?? '' }}
                            </td>
                            <td>
                                {{ $requestAService->phone ?? '' }}
                            </td>
                            <td>
                                {{ $requestAService->homearea ?? '' }}
                            </td>
                            <td>
                                {{ $requestAService->region ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\RequestAService::SERVICE_SELECT[$requestAService->service] ?? '' }}
                            </td>
                            <td>
                                @can('request_a_service_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.request-a-services.show', $requestAService->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('request_a_service_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.request-a-services.edit', $requestAService->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('request_a_service_delete')
                                    <form action="{{ route('admin.request-a-services.destroy', $requestAService->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('request_a_service_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.request-a-services.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  let table = $('.datatable-RequestAService:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection