@extends('admin.default')

@section('page-header')
  <br>  Project <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['ProjectController@store'],
        'files' => true
      ])
    !!}

    @include('admin.project.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
    
    <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>

  {!! Form::close() !!}
  

@stop

