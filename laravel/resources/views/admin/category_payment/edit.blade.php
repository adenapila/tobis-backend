@extends('admin.default')

@section('page-header')
  <br> Category Payment <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
        'action' => ['Category_PaymentController@update', $item->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.category_payment.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

