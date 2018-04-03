@extends('layouts.app')

@section('page-title', 'Horas')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      @lang('app.hour')
      <small>@lang('app.new_hour')</small>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li class="active">@lang('app.new_hour')</li>
        </ol>
      </div>

    </h1>
  </div>
</div>

@include('partials.messages')

<div class="col-md-12 col-sm-12 col-xs-12 bootstrap-grid margin-bottom">
    <div class="panel panel-default">
    <div class="panel-heading">@lang('app.info_hour')</div>
      <div class="panel-body">
        @if($edit)
        {!! Form::model($hour, ['route' => ['hour.update', $hour->id], 'method' => 'PUT']) !!}
        @else
         {!! Form::open(['route' => 'hour.store', 'class' => 'col-md-6']) !!}
        @endif
        <div class="form-group">
            <label for="time">@lang('app.time')</label>
            <div class="form-group">
                <div class='input-group date'>
                    <input type='text' name="time" id='timeh' value="{{ $edit ? $hour->time : '' }}" class="form-control" />
                    <span class="input-group-addon" style="cursor: default;">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
      <div class="panel-footer">
        <button type="submit" class="btn btn-success">@lang('app.save')</button>
        <a href="{{route('hour.index')}}" class="btn btn-primary"><i class="fa fa-list"></i> @lang('app.list_hour')</a>
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
       $('#timeh').datetimepicker({
      format: 'HH:mm a'
      });
   });

</script>
@stop