<table class="table-responsive top-border-table" id="table_1">
    <thead>
      <th>@lang('app.code')</th>
      <th>@lang('app.hour')</th>
      <th>@lang('app.actions')</th>
    </thead>
  <tbody>
    @if(count($hour))
      @foreach($hour as $horas)
      <tr>
          <td>{{$horas->id}}</td>
          <td>{{$horas->time}}</td>
          <td>
            <a class="btn btn-warning" href="{{route('hour.edit',$horas->id)}}"><i class="fa fa-pencil"></i></a>
            <a href="{{ route('hour.destroy', $horas->id) }}" class="btn btn-danger btn-circle" title="eliminar parametro"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    data-method="DELETE"
                                    data-confirm-title="Confirme"
                                    data-confirm-text="Estas seguro de borrar esta @lang('app.hour')"
                                    data-confirm-delete="@lang('app.yes_delete_him')'">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
          </td>
      </tr>
      @endforeach
    @endif
  </tbody>
</table>
