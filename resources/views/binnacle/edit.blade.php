@extends('layouts.app')

@section('page-title', 'Bitacora')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      @lang('app.binnacle')
      <small>@lang('app.edit_binnacle')</small>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li class="active">@lang('app.edit_binnacle')</li>
        </ol>
      </div>

    </h1>
  </div>
</div>

@include('partials.messages')

<div class="col-md-8 col-sm-12 col-xs-12 bootstrap-grid margin-bottom">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h4> @lang('app.info_date'): {{$binnacle->date}} </h4>
      </div>
      <div class="panel-body">
        <ul class="list-unstyled">
          <li>Usuario: {{$binnacle->user->first_name}}</li>
        </ul>
        {!! Form::model($binnacle, ['route' => ['binnacle.update', $binnacle->id], 'method' => 'PUT']) !!}
        {!! Form::hidden('user_id',Auth::user()->id) !!}
        {!! Form::hidden('date',old('date')) !!}
        {!! Form::hidden('hour_id',old('hour_id')) !!}
        <div class="checkbox">
        <input type="checkbox" @if($binnacle->out_service) checked @endif id="out_service_edit" name="out_service" value="1"/>
        <label for="out_service">@lang('app.out_service')</label>
        </div>
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
              <td>{!! Form::text('value_parameter[]',($binnacle->out_service)? 'Fuera de servicio': $value) !!}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
        <button type="submit" class="btn btn-success">@lang('app.save')</button>
        {!! Form::close()!!}
      </div>
    </div>
</div>

@endsection