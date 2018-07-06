@extends('admin.default')

@section('page-header')
  <br> Payment <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
        'action' => ['PaymentController@update', $item->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.payment.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
    
  {!! Form::close() !!}
@stop

