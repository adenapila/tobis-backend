@extends('admin.default')

@section('page-header')
  <br> UTJ <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
        'action' => ['utjController@update', $item->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.utj.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
    
  {!! Form::close() !!}
@stop

