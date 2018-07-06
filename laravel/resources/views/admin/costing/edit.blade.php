@extends('admin.default')

@section('page-header')
  <br> Costing <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
        'action' => ['CostingController@update', $item->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.costing.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
    
  {!! Form::close() !!}
@stop

