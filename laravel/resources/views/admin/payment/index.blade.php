@extends('admin.default')

@section('page-header')
    <br> Payment <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

<div class="mB-20">
    <a href="{{ route(ADMIN . '.payment.create') }}" class="btn btn-info">
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
                        <th>Booking Number</th>
                        <th>Customer Code</th>
                        <th>Customer Name</th>
                        <th>Unit Code</th>
                        <th>Unit Type</th>
                        <th>Unit Price</th>
                        <th>First Payment</th>
                        <th>Payment Type</th>
                        <th>Transaction Price</th>
                        <th>DP</th>
                        <th>KPR</th>
                        <th>Cash</th>
                        <th>Reveral Code</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.payment.edit', $item->id) }}">{{ $item->branchcode }}</a></td>
                            <td>{{ $item->booking_no }}</td>
                            <td>{{ $item->code_customer }}</td>
                            <td>{{ $item->name_customer }}</td>
                            <td>{{ $item->code_unit }}</td>
                            <td>{{ $item->type_unit }}</td>
                            <td align="right">{{ sprintf('Rp. %s', number_format ($item->price_unit, 0)) }}</td>
                            <td align="right">{{ sprintf('Rp. %s', number_format ($item->first_payment, 0)) }}</td>
                            <td>{{ $item->type_payment }}</td>
                            <td align="right">{{ sprintf('Rp. %s', number_format ($item->harga_trans, 0)) }}</td>
                            <td align="right">{{ sprintf('Rp. %s', number_format ($item->dp, 0)) }}</td>
                            <td align="right">{{ sprintf('Rp. %s', number_format ($item->kpr, 0)) }}</td>
                            <td align="right">{{ sprintf('Rp. %s', number_format ($item->cash, 0)) }}</td>
                            <td>{{ $item->reveral_code }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.payment.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.payment.destroy', $item->id), 
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