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
    <div class="panel-heading">{{trans('app.date')}}: {{$date}} / {{trans('app.hour')}}: {{$hour1->time}}</div>
    <div class="panel-body">
      {!! Form::open(['route' => 'binnacle.store', 'class' => 'col-md-6', 'id' => 'regForm']) !!}
      {!! Form::hidden('user_id',Auth::user()->id) !!}
      {!! Form::hidden('date',$date) !!}
      {!! Form::hidden('hour_id',$hour) !!}
      <div class="checkbox">
        <input type="checkbox" id="out_service" name="out_service" value="1"/>
        <label for="out_service">@lang('app.out_service')</label>
      </div>
      <hr>
      <!-- One "tab" for each step in the form: -->
      <div id="hability_form">
        @foreach($parameters->chunk(10) as $parameter)
        <div class="tab">
          @foreach($parameter as $inputparameter)
          <p><label>{{$inputparameter->tx_parameter}}</label>
          <input type="number" step="any" name="value_parameter[]" placeholder="Indroduzca valor" oninput="this.className = ''">
          {!! Form::hidden('parameter_id[]',$inputparameter->id)!!}
          </p>
          @endforeach
        </div>
        @endforeach

        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" class="btn btn-success" id="prevBtn" onclick="nextPrev(-1)">@lang('app.previous')</button>
            <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">@lang('app.next')</button>
          </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          @foreach($parameters->chunk(10) as $parameter)
          <span class="step"></span>
          @endforeach
        </div>
      </div>
      <button type="submit" class="btn btn-success disabled hide" id="out_service_button">@lang('app.save')</button>
      {!! Form::close()!!}
    </div>
  </div>
</div>

@endsection
@section('scripts')
    {!! HTML::script('assets/plugins/form/form-wizard.js') !!}
@endsection
