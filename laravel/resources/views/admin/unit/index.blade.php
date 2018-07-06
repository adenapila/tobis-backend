@extends('admin.default')

@section('page-header')
    <br>    Unit Type <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

<div class="mB-20">
    <a href="{{ route(ADMIN . '.unit.create') }}" class="btn btn-info">
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
                        <th>Unit Code</th>
                        <th>Unit Type</th>
                        <th>Unit Block</th>
                        <th>Unit No</th>
                        <th>Lt. Unit</th>
                        <th>Lb. Unit</th>
                        <th>Unit Status</th>
                        <th>Customer Code</th>
                        <th>Customer Name</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.unit.edit', $item->id) }}">{{ $item->branchcode }}</a></td>
                            <td>{{ $item->code_unit }}</td>
                            <td>{{ $item->type_unit }}</td>
                            <td>{{ $item->block_unit }}</td>
                            <td>{{ $item->no_unit }}</td>
                            <td>{{ $item->lt_unit }}</td>
                            <td>{{ $item->lb_unit }}</td>
                            <td>{{ $item->status_unit }}</td>
                            <td>{{ $item->code_customer }}</td>
                            <td>{{ $item->name_customer }}</td>
                            <td align="right">{{sprintf('Rp. %s', number_format ($item->price, 0)) }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.unit.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.unit.destroy', $item->id), 
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