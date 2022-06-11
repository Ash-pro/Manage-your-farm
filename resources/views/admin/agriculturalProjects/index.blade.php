@extends('layouts.admin')
@section('content')
@can('agricultural_project_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.agricultural-projects.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.agriculturalProject.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.agriculturalProject.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-AgriculturalProject">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.nationalid') }}
                        </th>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.land_area') }}
                        </th>
                        <th>
                            {{ trans('cruds.agriculturalProject.fields.project_type') }}
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
                                @foreach(App\Models\AgriculturalProject::PROJECT_TYPE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agriculturalProjects as $key => $agriculturalProject)
                        <tr data-entry-id="{{ $agriculturalProject->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $agriculturalProject->id ?? '' }}
                            </td>
                            <td>
                                {{ $agriculturalProject->name ?? '' }}
                            </td>
                            <td>
                                {{ $agriculturalProject->nationalid ?? '' }}
                            </td>
                            <td>
                                {{ $agriculturalProject->phone ?? '' }}
                            </td>
                            <td>
                                {{ $agriculturalProject->address ?? '' }}
                            </td>
                            <td>
                                {{ $agriculturalProject->land_area ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\AgriculturalProject::PROJECT_TYPE_SELECT[$agriculturalProject->project_type] ?? '' }}
                            </td>
                            <td>
                                @can('agricultural_project_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.agricultural-projects.show', $agriculturalProject->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('agricultural_project_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.agricultural-projects.edit', $agriculturalProject->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('agricultural_project_delete')
                                    <form action="{{ route('admin.agricultural-projects.destroy', $agriculturalProject->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('agricultural_project_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.agricultural-projects.massDestroy') }}",
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
  let table = $('.datatable-AgriculturalProject:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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