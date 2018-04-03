@extends('layouts.app')

@section('page-title', 'Parametros')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      @lang('app.parameter')
      <small>@lang('app.new_parameter')</small>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li class="active">@lang('app.new_parameter')</li>
        </ol>
      </div>

    </h1>
  </div>
</div>

@include('partials.messages')

<div class="col-md-12 col-sm-12 col-xs-12 bootstrap-grid margin-bottom">
    <div class="panel panel-default">
    <div class="panel-heading">@lang('app.info_parameter')</div>
      <div class="panel-body">
        @if($edit)
        {!! Form::model($parameter, ['route' => ['parameter.update', $parameter->id], 'method' => 'PUT']) !!}
        @else
         {!! Form::open(['route' => 'parameter.store', 'class' => 'col-md-6']) !!}
        @endif
        <div class="form-group">
          <label for="classification_id">@lang('app.classifications')</label>
          {!! Form::select('classification_id',$classification ,old('classification_id'), ['class' => 'form-control', 'placeholder' => 'Sellecione']) !!}
        </div>
        <div class="form-group">
          <label for="tx_parameter">@lang('app.parameter')</label>
          {!! Form::text('tx_parameter', old('tx_parameter'), ['class' => 'form-control', 'placeholder' => trans("app.parameter")])!!}
        </div>
        <div class="form-group">
          <label for="nb_min">@lang('app.nb_min')</label>
          {!! Form::number('nb_min', old('nb_min'), ['class' => 'form-control', 'placeholder' => trans("app.nb_min").' (00.00)', 'step' => 'any'])!!}
        </div>
        <div class="form-group">
          <label for="nb_max">@lang('app.nb_max')</label>
          {!! Form::number('nb_max', old('nb_max'), ['class' => 'form-control', 'placeholder' => trans("app.nb_max").' (00.00)', 'step' => 'any'])!!}
        </div>
        <div class="form-group">
          <label for="unit_id">@lang('app.tx_unit')</label>
          {!! Form::select('unit_id',$units,old('unit_id'), ['class' => 'form-control', 'placeholder' => 'Seleccione'])!!}
        </div>
      </div>
      <div class="panel-footer">
        <button type="submit" class="btn btn-success">@lang('app.save')</button>
        <a href="{{route('parameter.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i> @lang('app.list_parameter')</a>
      </div>
      {!! Form::close() !!}
    </div>
</div>

@endsection