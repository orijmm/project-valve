<table class="table-responsive top-border-table" id="table_1">
    <thead>
      <th>@lang('app.parameters')</th>
      <th>@lang('app.classification')</th>
      <th>@lang('app.nb_min')</th>
      <th>@lang('app.nb_max')</th>
      <th>@lang('app.tx_unit')</th>
      <th>@lang('app.actions')</th>
    </thead>
  <tbody>
    @if(count($parameter))
      @foreach($parameter as $param)
      <tr>
          <td>{{$param->tx_parameter}}</td>
          <td>{{$param->classification->tx_name}}</td>
          <td>{{$param->nb_min}}</td>
          <td>{{$param->nb_max}}</td>
          <td>{{$param->units->tx_unit}}</td>
          <td>
            <a class="btn btn-warning" href="{{route('parameter.edit',$param->id)}}"><i class="fa fa-pencil"></i></a>
            <a href="{{ route('parameter.destroy', $param->id) }}" class="btn btn-danger btn-circle" title="eliminar parametro"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    data-method="DELETE"
                                    data-confirm-title="Confirme"
                                    data-confirm-text="Estas seguro de borrar este @lang('app.parameter')"
                                    data-confirm-delete="@lang('app.yes_delete_him')'">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
          </td>
      </tr>
      @endforeach
    @endif
  </tbody>
</table>
  