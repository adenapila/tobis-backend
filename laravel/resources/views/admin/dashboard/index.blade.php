@extends('admin.default')

@section('content')
<div class="dropdown">
  <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Make a Selection
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/admin/unit">Sapphire</a>
    
  </div>
</div>
<h2>Dashboard</h2>

<br>
<div class="row">
  <div class="col-sm-2">
    <div class="card text-white bg-success mb-3">
      <div class="card-body">
        <h6 class="card-title">Available</h6>
        <p class="card-text"><h1 style="font-size:70px;"><center>
        <?php
        echo 
        DB::table('t003s')->where('status_unit', '=', 'available')      
        ->count();
        ?>
        </center></h1></p>     
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card text-white bg-danger mb-3">
      <div class="card-body">
        <h6 class="card-title">Sold</h6>
        <p class="card-text"><h1 style="font-size:70px;"><center>
        <?php
        echo 
        DB::table('t003s')->where('status_unit', '=', 'sold')      
        ->count();
        ?>
        </center></h1></p>     
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card text-white bg-warning mb-3" >
      <div class="card-body">
        <h6 class="card-title">Close</h6>
        <p class="card-text"><h1 style="font-size:70px;"><center>
        <?php
        echo 
        DB::table('t003s')->where('status_unit', '=', 'close')      
        ->count();
        ?>
        </center></h1></p>      
      </div>
    </div>
  </div> <div class="col-sm-2">
    <div class="card text-white bg-primary mb-3">
      <div class="card-body">
        <h6 class="card-title">Total</h6>
        <p class="card-text"><h1 style="font-size:70px;"><center>
        <?php
        echo $status_unit = DB::table('t003s')->count(DB::raw('status_unit'));
        ?>
        </center></h1></p>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">             
              <thead>
                    <tr>
                        <th>UTJ</th>
                        <th>Booking Number</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
               @foreach ($tables as $table)
                        <tr>
                            <td>{{ $table->updated_at}}</td>
                            <td>{{ $table->booking_no}}</td>
                            <td>{{ $table->name_customer }}</td>
                            <td>{{ $table->status }}</td>
                            <!-- <td><a button class="btn btn-primary hidden-print" href="/admin/report">View</a>
                            </td> -->
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.report.index', $table->id) }}" <span class="btn btn-primary hidden-print"></span>View</a></li>
                                    <li class="list-inline-item">
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

