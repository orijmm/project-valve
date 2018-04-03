@extends('layouts.app')

@section('page-title', 'Parámetros')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      @lang('app.parameter')
      <small>@lang('app.list_parameter')</small>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li class="active">@lang('app.parameter')</li>
        </ol>
      </div>

    </h1>
  </div>
</div>

@include('partials.messages')

<div class="row tab-search">
  <div class="col-md-2">
    <a href="{{route('parameter.create')}}" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      @lang('app.new_parameter')
    </a>
  </div>
</div>
@include('parameter.list')

@endsection
