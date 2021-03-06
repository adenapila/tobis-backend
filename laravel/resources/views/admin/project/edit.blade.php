@extends('admin.default')

@section('page-header')
  <br> Project <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
        'action' => ['ProjectController@update', $item->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.project.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
    
  {!! Form::close() !!}
@stop

