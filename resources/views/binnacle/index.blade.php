@extends('layouts.app')

@section('page-title', 'Bitácora diaria')

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
@include('partials.messages')
<div class="col-md-12 col-sm-12 col-xs-12 bootstrap-grid margin-bottom">
  <div class="panel panel-default">
    <div class="panel-heading">@lang('app.select_date_hour')</div>
     {!! Form::open(['route' => 'binnacle.date.choose', 'class' => 'col-md-6', 'id' => 'choosebinnacle']) !!}
    <div class="panel-body">
      <div class="form-group">
          <label for="date">@lang('app.select_date')</label>
          <div class="form-group">
              <div class='input-group date'>
              {!! Form::text('date',null, ['class' => 'form-control', 'id' =>'dateb'])!!}
                  <span class="input-group-addon" style="cursor: default;">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
          </div>
          <div class="form-group">
          <label for="date">@lang('app.select_hour')</label>
            <div class='input-group'>
              @foreach($hours as $hour)
              <a class="btn btn-info hourbinnacle" data-hourid="{{$hour->id}}" href="#">{{$hour->time}}</a>
              @endforeach
              {!! Form::hidden('hour_id',null, ['id' => 'hour_id']) !!}
            </div>
          </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection
@section('styles')
    {!! HTML::style('assets/css/bootstrap-datetimepicker.min.css') !!}
    {!! HTML::style('assets/plugins/croppie/croppie.css') !!}
@stop

@section('scripts')
    {!! HTML::script('assets/plugins/croppie/croppie.js') !!}
    {!! HTML::script('assets/js/moment.min.js') !!}
    {!! HTML::script('assets/js/bootstrap-datetimepicker.min.js') !!}
    {!! HTML::script('assets/js/as/btn.js') !!}
<script type="text/javascript">
   $(document).ready(function(){
       $('#dateb').datetimepicker({
      format: 'DD-MM-YYYY'
      });
   });

</script>
@stop
