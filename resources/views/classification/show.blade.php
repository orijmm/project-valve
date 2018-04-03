@extends('layouts.app')

@section('page-title', 'Clasificación')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12 bootstrap-grid margin-bottom">

    <div class="panel">
      <div class="panel-heading">
      <h2 class="text-center"> @lang('app.new_classification')</h2>
      </div>
      <div class="panel-body">
        <ul class="list-unstyled">
          <li><strong>@lang('app.tx_name'):</strong> {{$classification->tx_name}}</li>
          <li><strong>@lang('app.tx_description'):</strong> {{$classification->tx_description}}</li>
          <li><strong>@lang('app.nb_min'):</strong> {{$classification->nb_min}}</li>
          <li><strong>@lang('app.nb_max'):</strong> {{$classification->nb_max}}</li>
          <li><strong>@lang('app.tx_unit'):</strong> {{$classification->tx_unit}}</li>
        </ul>        
      </div>
      <div class="panel-footer">
        <a href="{{route('classification.index')}}" class="btn btn-success">@lang('app.list_classification')</a>
      </div>
    </div>
</div>

@endsection