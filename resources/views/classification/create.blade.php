@extends('layouts.app')

@section('page-title', 'Clasificación')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      @lang('app.classification')
      <small>@lang('app.new_classification')</small>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li class="active">@lang('app.new_classification')</li>
        </ol>
      </div>

    </h1>
  </div>
</div>

@include('partials.messages')

<div class="col-md-12 col-sm-12 col-xs-12 bootstrap-grid margin-bottom">
    <div class="panel panel-default">
    <div class="panel-heading">@lang('app.info_classification')</div>
      <div class="panel-body">
        @if($edit)
        {!! Form::model($classification, ['route' => ['classification.update', $classification->id], 'method' => 'PUT']) !!}
        @else
         {!! Form::open(['route' => 'classification.store', 'class' => 'col-md-6']) !!}
        @endif
        <div class="form-group">
          <label for="tx_name">@lang('app.tx_name')</label>
          {!! Form::text('tx_name', old('tx_name'), ['class' => 'form-control', 'placeholder' => trans("app.tx_name")])!!}
        </div>
        <div class="form-group">
          <label for="tx_description">@lang('app.tx_description')</label>
          {!! Form::text('tx_description', old('tx_description'), ['class' => 'form-control', 'placeholder' => trans("app.tx_description")])!!}
        </div>
      </div>
      <div class="panel-footer">
        <button type="submit" class="btn btn-success">@lang('app.save')</button>
        <a href="{{route('classification.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i> @lang('app.list_classification')</a>
      </div>
      {!! Form::close() !!}
    </div>
</div>

@endsection