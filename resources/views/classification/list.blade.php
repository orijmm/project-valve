<table class="table-responsive top-border-table" id="table_1">
    <thead>
      <th>@lang('app.tx_name')</th>
      <th>@lang('app.tx_description')</th>
      <th>@lang('app.actions')</th>
    </thead>
  <tbody>
    @if(count($classification))
      @foreach($classification as $classi)
      <tr>
          <td>{{$classi->tx_name}}</td>
          <td>{{$classi->tx_description}}</td>
          <td>
            <a class="btn btn-warning" href="{{route('classification.edit',$classi->id)}}"><i class="fa fa-pencil"></i></a>
            <a href="{{ route('classification.destroy', $classi->id) }}" class="btn btn-danger btn-circle" title="eliminar parametro"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    data-method="DELETE"
                                    data-confirm-title="Confirme"
                                    data-confirm-text="Estas seguro de borrar esta @lang('app.classification')"
                                    data-confirm-delete="@lang('app.yes_delete_him')'">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
          </td>
      </tr>
      @endforeach
    @endif
  </tbody>
</table>
