@extends('admin.default')

@section('page-header')
  <br> Marketing <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
        'action' => ['MarketingController@update', $item->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.marketing.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

