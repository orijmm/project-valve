@extends('layouts.app')

@section('page-title', 'Horas')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      @lang('app.hour')
      <small>@lang('app.list_hour')</small>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li class="active">@lang('app.hour')</li>
        </ol>
      </div>

    </h1>
  </div>
</div>

@include('partials.messages')

<div class="row tab-search">
  <div class="col-md-2">
    <a href="{{route('hour.create')}}" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      @lang('app.new_hour')
    </a>
  </div>
</div>
@include('hour.list')

@endsection
