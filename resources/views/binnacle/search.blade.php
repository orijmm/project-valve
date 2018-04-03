@extends('layouts.app')

@section('page-title', 'Bitacora')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      @lang('app.search_binnacle')
      <div class="pull-right">
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li class="active">@lang('app.binnacle')</li>
        </ol>
      </div>

    </h1>
  </div>
</div>
@include('partials.messages')

<table class="table-responsive top-border-table" id="table_1">
    <thead>
      <th>@lang('app.date')</th>
      <th>@lang('app.hour')</th>
      <th>@lang('app.actions')</th>
    </thead>
  <tbody>
    @if(count($binnacles))
      @foreach($binnacles as $binnac)
      <tr>
          <td>{{$binnac->date}}</td>
          <td>{{$binnac->hour->time}}</td>
          <td>
            <a class="btn btn-warning" href="{{route('binnacle.edit',$binnac->id)}}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-info" href="{{route('binnacle.show',$binnac->id)}}"><i class="fa fa-eye"></i></a>
          </td>
      </tr>
      @endforeach
    @endif
  </tbody>
</table>

@endsection