<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Tombak Intan') }}</title>

  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <script>
  function myFunction() 
  {
    window.print();
  }
  </script>
</head>

<body class="app">
    <div> 
      <div class="page">
        <main class='main-content bgc-white-100'>
          <div id='mainContent'>
            <div class="container-fluid">
              <div class="container" id="box">
                    <img src="/images/new.png" style="width:250px;height:50px;">
                <div>
                    <br><br><h4 align="right"><b>SURAT PESANAN RUMAH SEMENTARA</b></h4>
                    <h4 align="right">No. SPRS-0506/15-18/SPR-VillaBali A.06</h4>
                    <h4 align="right">Tanggal 05 Juni 2018</h4> <br><br>
                    <p style="font-size: medium;"><b>Informasi Pemesanan</b></p><br>  
                    
                        <table style="width:50%">
                        @foreach ($tables as $table)
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>&emsp;{{ $table->name_customer }}</td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td>&emsp;{{ $table->costing->phone }}</td>
                        </tr>
                        <tr>
                            <td>No. NPWP</td>
                            <td>:</td>
                            <td>&emsp;{{ $table->costing->npwp }}</td>
                        </tr>
                        <tr>
                            <td>No. KTP</td>
                            <td>:</td>
                            <td>&emsp;{{ $table->costing->ktp }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>&emsp;{{ $table->costing->email }}</td>
                        </tr>
                        </table> <br> 
                        
                        @endforeach                         
                   
                        <span style="font-size: medium;">
                        Dengan ini pemesan melakukan pemesanan unit dan penerima pesanan menyetujui pemesanan dengan perhitungan harga, rincian dan syarat serta ketentuan berlaku:
                        </span><br><br>
                   
                   
                        <table style="width:47%">      
                        @foreach ($tables as $table)       
                        
                        <tr>
                            <td>Tipe</td>
                            <td>:</td>
                            <td>&emsp;{{ $table->type_unit }}</td>
                        </tr>
                       
                        <tr>
                            <td>Kode Unit</td>
                            <td>:</td>
                            <td>&emsp;{{ $table->code_unit }}</td>
                        </tr>
                        <tr>
                            <td>Harga Jual</td>
                            <td>:</td>
                            <td>&emsp;{{ sprintf('Rp. %s', number_format ($table->harga_trans, 0)) }}</td>
                        </tr>
                   
                    </table><br>
                        @endforeach
                       
                    <p style="font-size: medium;">
                    Selanjutnya pemesan berkewajiban untuk membayar unit pesanan dengan rincian sebagai berikut:</p><br>
                    
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">DP</th>
                        <th scope="col">KPR</th>
                        <th scope="col">Tanggal Jatuh Tempo</th>
                        <th scope="col">Jumlah Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tables as $table)
                        <tr>
                            <td>{{ $table->id }}</td>
                            <td>{{ sprintf('Rp. %s', number_format ($table->dp, 0)) }}</td>
                            <td>{{ sprintf('Rp. %s', number_format ($table->kpr, 0)) }}</td>
                            <td>-</td>
                            <td>{{ sprintf('Rp. %s', number_format ($table->harga_trans, 0)) }}</td>
                            </td>
                        </tr>
                        @endforeach                        
                    </tbody>
                    </table><br>
                    <span style="font-size: medium;">
                    Ketentuan: <br>
                    1.  Unit yang sudah dipesan tidak dapat ditukar dengan unit lainnya.<br>
                    2.  Uang tanda jadi tidak dapat dikembalikan.<br>
                    3.  Pembatalan sepihak oleh pemesan maka uang yang dusah masuk tidak dapat dikembalikan.<br>
                    4.  Suku bunga kredit sepenuhnya ditentukan oleh Bank Pemberi Kredit.<br>
                    5.  Perubahan bangunan hanya boleh dilakukan setelah proses serah terima unit selesai dilakukan.<br>
                    6.  Harga dan ketentuan dapat berubah sewaktu - waktu tanpa pemberitahuan terlebih dahulu.<br>
                    7.  Besaran DP untuk cara bayar KPR minimal 10% dan dapat bertambah sesuai kebijakan yang berlaku di Bank penyedia KPR.<br>
                    8.  Segala kebijakan Pemerintah yang mengakibatkan perubahan ketentuan KPR diluar tanggung jawab Penerima Pesanan.<br>
                    9.  Khusus cara bayar dengan KPR.<br>
                    &emsp;a. &emsp; Uang Tanda Jadi (UTJ) pilih Blok dan No. Unit. <br>
                    &emsp;b. &emsp; Berkas KPR harus dilengkapi dan diserahkan ke Penerima paling lambat 7 hari setelah tanggal UTJ. <br>
                    &emsp;c. &emsp; 30 hari dari tanggal UTJ maka keluar SP3K, dan paling lambat 7 hari harus sudah dilakukan akad kredit KPR. <br>
                    10. Pemesan dengan ini menyatakan dan sepakat untuk memesan satuan unit rumah milik PT. Tombak Intan dengan syarat dan ketentuan yang dapat
                    &emsp; diunduh melalui http//: www.tombakintan.co.id/download/syarat & ketentuan. <br>
                    11. Apabila setelah 7 hari diterbitkannya surat ini tidak terdapat sanggahan maka pesanan dianggap telah menyetujui dan tunduk atas segala ketentuan
                    &emsp; yang berlaku.<br> <br> <br>
                    </span>

                     <span style="font-size: medium">
                        Surat ini dicetak secara digital sehingga tidak perlu dibubuhi tanda tangan oleh pihak berwenang.
                     <span>
                </div>
                <br>
                    <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                    <a href="{{ URL::previous() }}" class="btn btn-primary hidden-print">Back</a>
                </div>
            </div>
          </div>
        </main>
 <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>