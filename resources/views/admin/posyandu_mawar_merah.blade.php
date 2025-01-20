@extends('layout.app')
@section('content')

@if ($users == 1)
<div class="main-content container-fluid">

    <div class="page-title">
      <div class="row">
        <div class="col-sm-12">
          <h3>Data Posyandu Mawar Merah</h3>
          <p class="text-subtitle text-muted">Anda dapat melihat data bayi/balita, penimbangan, imunisasi, vitamin yang telah di kelola oleh
            pengurus posyandu pada halaman ini.</p>
        </div>
        
      </div>
        
    </div>
    @if (session('Success'))
    <div class="alert alert-light-success alert-dismissible show fade">
      <strong>Success!</strong> {{ session('Success') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if (session('Successs'))
    <div class="alert alert-light-success alert-dismissible show fade">
      <strong>Success!</strong> {{ session('Successs') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if (session('Successss'))
    <div class="alert alert-light-success alert-dismissible show fade">
      <strong>Success!</strong> {{ session('Successss') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
      <h4 class="card-title">Tabel Data Bayi/Balita Posyandu Mawar Merah</h4>
    </div>
        <div class="card-content">
           
            <!-- table hover -->
            <div class="table-responsive mt-2">
                <table class="table table-striped table-hover" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik Anak</th>
                            <th>No KK</th>
                            <th>Nama Anak</th>
                            <th>Nama Ibu</th>
                            <th>Nama Ayah</th>
                            <th>Anak Ke</th>
                            <th>Jenis Kelamin</th>
                            <th>TTL</th>
                            <th>Umur</th>
                            <th>Berat Badan</th>
                            <th>Panjang Badan</th>
                            <th>Lingkar Lengan</th>
                            <th>Lingkar Kepala</th>
                            <th>Alamat</th>
                            <th>No HP Ortu</th>
        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pyb3 as $no => $item)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $item->nik_anak }}</td>
                                <td>{{ $item->no_kk }}</td>
                                <td>{{ $item->nama_anak }}</td>
                                <td>{{ $item->nama_ibu }}</td>
                                <td>{{ $item->nama_ayah }}</td>
                                <td>{{ $item->anak_ke }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{date("d/M/Y", strtotime($item->ttl));}}</td>
                                <td>{{ $item->umur }} Bulan</td>
                                <td>{{ $item->berat_badan }} Kg</td>
                                <td>{{ $item->panjang_badan }} Cm</td>
                                <td>{{ $item->lingkar_lengan }} Cm</td>
                                <td>{{ $item->lingkar_kepala }} Cm</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_hp_ortu }}</td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
      <h4 class="card-title">Tabel Data Penimbangan Posyandu Mawar Merah</h4>
    </div>
        <div class="card-content">
           
            <!-- table hover -->
            <div class="table-responsive mt-2">
                <table class="table table-striped table-hover" id="table2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Penimbangan</th>
                            <th>Nik Anak</th>
                            <th>Nama Anak</th>
                            <th>JK</th>
                            <th>Umur</th>
                            <th>Berat Badan</th>
                            <th>Ket</th>
                            <th>Status Gizi</th>
                   

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tmbng3 as $no => $item)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{date("d/M/Y", strtotime($item->tanggal));}}</td>
                                <td>{{ $item->data_bayi_balita->nik_anak }}</td>
                                <td>{{ $item->data_bayi_balita->nama_anak }}</td>
                                <td>{{ $item->data_bayi_balita->jk }}</td>
                                <td>{{ $item->umur }} bln</td>
                                <td>{{ $item->berat_badan }} kg</td>
                                <td>{{ $item->keterangan}}</td>
                                <td>{{ $item->status_gizi }}</td>
                              
                                
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
      <h4 class="card-title">Tabel Data Imunisasi Posyandu Mawar Merah</h4>
    </div>
        <div class="card-content">
           
            <!-- table hover -->
            <div class="table-responsive mt-2">
                <table class="table table-striped table-hover" id="table3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Imunisasi</th>
                            <th>Nik Anak</th>
                            <th>Nama Anak</th>
                            <th>Umur</th>
                            <th>Jenis Imunisasi</th>
                           


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imun3 as $no => $item)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{date("d/M/Y", strtotime($item->tanggal));}}</td>
                                <td>{{ $item->data_bayi_balita->nik_anak }}</td>
                                <td>{{ $item->data_bayi_balita->nama_anak }}</td>
                                <td>{{ $item->data_bayi_balita->umur }} bln</td>
                                <td>{{ $item->jenis_imunisasi }}</td>
                                
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
      <h4 class="card-title">Tabel Data Vitamin Posyandu Mawar Merah</h4>
    </div>
        <div class="card-content">
           
            <!-- table hover -->
            <div class="table-responsive mt-2">
                <table class="table table-striped table-hover" id="table4">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nik Anak</th>
                            <th>Nama Anak</th>
                            <th>Umur</th>
                            <th>Jenis Vitamin</th>
                           
                          

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vtmn3 as $no => $item)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{date("d/M/Y", strtotime($item->tanggal));}}</td>
                                <td>{{ $item->data_bayi_balita->nik_anak }}</td>
                                <td>{{ $item->data_bayi_balita->nama_anak }}</td>
                                <td>{{ $item->data_bayi_balita->umur }} bln</td>
                                <td>{{ $item->jenis_vitamin }}</td>
                                
                                
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
@endsection

@section('js')
<script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>


@endsection