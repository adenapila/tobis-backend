@extends('admin.default')

@section('page-header')
  <br>  Unit Type <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['UnitController@store'],
        'files' => true
      ])
    !!}

    @include('admin.unit.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
    <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
    
  {!! Form::close() !!}
  

@stop

