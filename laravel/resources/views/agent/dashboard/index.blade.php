@extends('agent.default')

@section('content')
<div class="dropdown">
  <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Make a Selection
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Sapphire</a>
    <a class="dropdown-item" href="#">Emerald</a>
    <a class="dropdown-item" href="#">Bougenville</a>
    <a class="dropdown-item" href="#">Jasmine</a>
  </div>
</div>
<h2>Dashboard</h2>

<br>
<div class="row">
  <div class="col-sm-2">
    <div class="card text-white bg-success mb-3">
      <div class="card-body">
        <h6 class="card-title">Stock</h6>
        <p class="card-text"><h1 style="font-size:70px;"><center>29</center></h1></p>     
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card text-white bg-danger mb-3">
      <div class="card-body">
        <h6 class="card-title">Sold</h6>
        <p class="card-text"><h1 style="font-size:70px;"><center>47</center></h1></p>     
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card text-white bg-warning mb-3" >
      <div class="card-body">
        <h6 class="card-title">Progress</h6>
        <p class="card-text"><h1 style="font-size:70px;"><center>4</center></h1></p>      
      </div>
    </div>
  </div> <div class="col-sm-2">
    <div class="card text-white bg-primary mb-3">
      <div class="card-body">
        <h6 class="card-title">Total</h6>
        <p class="card-text"><h1 style="font-size:70px;"><center>79</center></h1></p>
      </div>
    </div>
  </div>
</div>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UTJ</th>
      <th scope="col">Sales</th>
      <th scope="col">Konsumen</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>12-12-1999</td>
      <td>Subur / Penthouse</td>
      <td>Yusuf</td>
      <td>Berkas</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>12-12-1999</td>
      <td>Sri / Remax</td>
      <td>Yusuf</td>
      <td>SP3K</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>12-12-1999</td>
      <td>Reza / Inhouse</td>
      <td>Yusuf</td>
      <td>Bank</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>12-12-1999</td>
      <td>Desi / Inhouse</td>
      <td>Yusuf</td>
      <td>Akad</td>
    </tr>
  </tbody>
</table>
@endsection 