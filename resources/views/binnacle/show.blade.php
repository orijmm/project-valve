@extends('layouts.app')

@section('page-title', 'Clasificación')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      @lang('app.diary_binnacle')
      <div class="pull-right">
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li class="active">@lang('app.diary_binnacle')</li>
        </ol>
      </div>

    </h1>
  </div>
</div>
<div class="col-md-8 col-sm-12 col-xs-12 bootstrap-grid margin-bottom">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h4> @lang('app.info_date'): {{$binnacle->date}} </h4>
      </div>
      <div class="panel-body">
        <ul class="list-unstyled">
          <li>Usuario: {{$binnacle->user->first_name}}</li>
        </ul>
        <table class="table table-bordered">
          <thead>
            <th>Parametro</th>
            <th>Unidad</th>
            <th>Min</th>
            <th>Max</th>
            <th>{{$binnacle->hour->time}}</th>
          </thead>
          <tbody>
          @foreach($binnacle->parameters as $key => $value)
            <tr>
              <td>{{$binnacle->getParameterName($key)->tx_parameter}}</td>
              <td>{{$binnacle->getParameterName($key)->units->tx_unit}}</td>
              <td>{{$binnacle->getParameterName($key)->nb_min}}</td>
              <td>{{$binnacle->getParameterName($key)->nb_max}}</td>
              <td>@if($binnacle->out_service)@lang('app.out_service')@else {{$value}} @endif</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>

@endsection