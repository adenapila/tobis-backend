@extends('admin.default')

@section('page-header')
    <br>    Marketing <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

<div class="mB-20">
    <a href="{{ route(ADMIN . '.marketing.create') }}" class="btn btn-info">
        {{ trans('app.add_button') }}
    </a>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
                <thead>
                    <tr>
                        <th>Branch Code</th>
                        <th>Code</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Phone 2</th>
                        <th>KTP</th>
                        <th>NPWP</th>
                        <th>Reveral Code</th>
                        <th>Komisi</th>
                        <th>Agent</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.marketing.edit', $item->id) }}">{{ $item->branchcode }}</a></td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->phone2 }}</td>
                            <td>{{ $item->ktp }}</td>
                            <td>{{ $item->reveral_code }}</td>
                            <td>{{ $item->npwp }}</td>
                            <td>{{ $item->komisi }}</td>
                            <td>{{ $item->agent }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.marketing.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.marketing.destroy', $item->id), 
                                            'method' => 'DELETE',
                                            ]) 
                                        !!}

                                            <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                            
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>                                
        </table>
      </div>
    </div>
  </div>
@endsection