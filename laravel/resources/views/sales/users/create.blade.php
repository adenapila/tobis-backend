@extends('sales.default')

@section('page-header')
  Sales <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['SalesController@store'],
        'files' => true
      ])
    !!}

    @include('sales.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
    
  {!! Form::close() !!}
@stop

