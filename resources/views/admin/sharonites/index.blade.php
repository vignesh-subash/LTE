@extends('layouts.admin')
@section('content')
@can('sharonite_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
          <a class="btn btn-success" href="{{ route("admin.sharonites.create") }}">
            {{ trans('global.add') }} {{ trans('global.sharonite.title_singular') }}
          </a>
        </div>
        <form action="{{ route("admin.import") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>

        </form>
    </div>
@endcan
<div class="card">
  <div class="card-header">
    {{ trans('global.sharonite.title_singular') }} {{ trans('global.list') }}
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover datatable">
          <thead>
            <tr>
              <th width="10">

              </th>
              <th>
                {{ trans('global.sharonite.fields.empName')}}
              </th>
              <th>
                {{ trans('global.sharonite.fields.designation')}}
              </th>
              <th>
                {{ trans('global.sharonite.fields.dob') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.anniversary') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.bloodGrooup') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.officeNumber') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.personalNumber') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.officeEmail') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.add1') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.add2') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.locality') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.city') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.pincode') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.cp1') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.relationship1') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.cd1') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.cp2') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.relationship2') }}
              </th>
              <th>
                {{ trans('global.sharonite.fields.cd2') }}
              </th>
              <th>
                &nbsp;
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($sharonites as $key => $sharonite)
              <tr data-entry-id="{{ $sharonite->id }}">
                <td>

                </td>
                <td>
                  {{ $sharonite->empName ?? '' }}
                </td>
                <td>
                  {{ $sharonite->designation ?? '' }}
                </td>
                <td>
                  {{ $sharonite->dob ?? '' }}
                </td>
                <td>
                  {{ $sharonite->anniversary ?? '' }}
                </td>
                <td>
                  {{ $sharonite->bloodGrooup ?? '' }}
                </td>
                <td>
                  {{ $sharonite->officeNumber ?? '' }}
                </td>
                <td>
                  {{ $sharonite->personalNumber ?? '' }}
                </td>
                <td>
                  {{ $sharonite->officeEmail ?? '' }}
                </td>
                <td>
                  {{ $sharonite->add1 ?? '' }}
                </td>
                <td>
                  {{ $sharonite->add2 ?? '' }}
                </td>
                <td>
                  {{ $sharonite->locality ?? '' }}
                </td>
                <td>
                  {{ $sharonite->city ?? '' }}
                </td>
                <td>
                  {{ $sharonite->pincode ?? '' }}
                </td>
                <td>
                  {{ $sharonite->cp1 ?? '' }}
                </td>
                <td>
                  {{ $sharonite->relationship1 ?? '' }}
                </td>
                <td>
                  {{ $sharonite->cd1 ?? '' }}
                </td>
                <td>
                  {{ $sharonite->cp2 ?? '' }}
                </td>
                <td>
                  {{ $sharonite->relationship2 ?? '' }}
                </td>
                <td>
                  {{ $sharonite->cd2 ?? '' }}
                </td>
                <td>
                  @can('sharonite_show')
                    <a class="btn btn-xs btn-primary" href="{{ route('admin.sharonites.show', $sharonite->id) }}">
                      {{ trans('global.view')}}
                    </a>
                  @endcan
                  @can('sharonite_edit')
                    <a class="btn btn-xs btn-primary" href="{{ route('admin.sharonites.edit', $sharonite->id) }}">
                      {{ trans('global.edit')}}
                    </a>
                  @endcan
                  @can('sharonite_delete')
                  <form action="{{ route('admin.sharonites.destroy', $sharonite->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sharonites.massDestroy') }}",
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
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('product_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection
