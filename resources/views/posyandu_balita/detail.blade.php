@extends('layout.app')
@section('content')
    <div class="main-content container-fluid">

        <div class="page-title">
          <div class="row">
            <div class="col-sm-6">
              <h3>Detail Data Bayi/Balita</h3>
              <p class="text-subtitle text-muted">Anda dapat melihat detail data bayi/balita pada halaman ini.</p>
            </div>
            <div class="col-sm-6 text-right">
              
            <a href="{{url('cetak-data-bayi-balita/'. $pyb->id)}}" class="btn btn-outline-primary m-3" target="blank">
                <i class="fas fa-print">
                </i> &nbsp;Cetak
            </a>
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
         
            <div class="card-content m-2">
                <h4 class="m-3">Detail Informasi Pribadi</h4>
               <div class="row">
                <div class="col-sm-6">
                    <table class="table">
                        <tr>
                            <th class="text-center">Nik Anak</th>
                            <td>{{$pyb->nik_anak}}</td>
                        </tr>
                        <tr>
                            <th class="text-center">No KK</th>
                            <td>{{$pyb->no_kk}}</td>
                        </tr>
                        <tr>
                            <th class="text-center">Nama Anak</th>
                            <td>{{$pyb->nama_anak}}</td>
                        </tr>
                        <tr>
                            <th class="text-center">Nama Ibu</th>
                            <td>{{$pyb->nama_ibu}}</td>
                        </tr>
                        <tr>
                            <th class="text-center">Nama Ayah</th>
                            <td>{{$pyb->nama_ayah}}</td>
                        </tr>
                        <tr>
                            <th class="text-center">Anak Ke-</th>
                            <td>{{$pyb->anak_ke}}</td>
                        </tr>  
                        
                        <tr>
                            <th class="text-center">Alamat</th>
                            <td>{{$pyb->alamat}}</td>
                        </tr>
                        <tr>
                            <th class="text-center">No HP Ortu</th>
                            <td>{{$pyb->no_hp_ortu}}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table">
                        <tr>
                            <th class="text-center">Jenis Kelamin</th>
                            <td>{{$pyb->jk}}</td>
                        </tr>
                    <tr>
                        <th class="text-center">Tanggal Lahir</th>
                        <td>{{$pyb->ttl}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Umur</th>
                        <td>{{$pyb->umur}} bulan</td>
                    </tr>
                    <tr>
                        <th class="text-center">Berat Badan</th>
                        <td>{{$pyb->berat_badan}} kg</td>
                    </tr>
                    <tr>
                        <th class="text-center">Panjang Badan</th>
                        <td>{{$pyb->panjang_badan}} cm</td>
                    </tr>
                    <tr>
                        <th class="text-center">Lingkar Lengan</th>
                        <td>{{$pyb->lingkar_lengan}} cm</td>
                    </tr>
                    <tr>
                        <th class="text-center">Lingkar Kepala</th>
                        <td>{{$pyb->lingkar_kepala}} cm</td>
                    </tr>
                </table>
                </div>
               </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content m-2">
                <h4 class="m-3">Data Penimbangan</h4>
             
                    <table class="table table-striped table-hover" id="table">
                        <thead style="background-color: yellow">
                        <tr>
                            <th class="text-center">No</th>
                           <th class="text-center">Tanggal Penimbangan</th>
                     
                           <th class="text-center">Umur</th>
                           <th class="text-center">Berat Badan</th>
                           <th class="text-center">Keterangan</th>
                           <th class="text-center">Status Gizi</th>
                           <th class="text-center">Saran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tmbng as $no=>$item)
                        <tr>
                            <td class="text-center">{{$no+1}}</td>
                            <td class="text-center">{{date("d/M/Y", strtotime($item->tanggal));}}</td>
                            <td class="text-center">{{$item->umur}} bulan</td>
                            <td class="text-center">{{$item->berat_badan}} kg</td>
                            <td class="text-center">{{$item->keterangan}}</td>
                            <td class="text-center">{{$item->status_gizi}}</td>
                            <td class="text-center">{{$item->saran}}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                    </table>
                
            </div>
        </div>
        <div class="card">
            <div class="card-content m-2">
                <h4 class="m-3">Data Imunisasi</h4>
             
                    <table class="table table-striped table-hover" id="table3">
                        <thead style="background-color: yellow">
                        <tr>
                            <th class="text-center">No</th>
                           <th class="text-center">Tanggal Imunisasi</th>
                     
                           <th class="text-center">Umur</th>
                           <th class="text-center">Jenis Imunisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imun as $no=>$item)
                        <tr>
                            <td class="text-center">{{$no+1}}</td>
                            <td class="text-center">{{date("d/M/Y", strtotime($item->tanggal));}}</td>
                            <td class="text-center">{{$item->umur}} bulan</td>
                            <td class="text-center">{{$item->jenis_imunisasi}} kg</td>

                        </tr>
                        @endforeach
                       
                    </tbody>
                    </table>
                
            </div>
        </div>
        <div class="card">
            <div class="card-content m-2">
                <h4 class="m-3">Data Vitamin</h4>
             
                    <table class="table table-striped table-hover" id="table2">
                        <thead style="background-color: yellow">
                        <tr>
                            <th class="text-center">No</th>
                           <th class="text-center">Tanggal</th>
                     
                           <th class="text-center">Umur</th>
                           <th class="text-center">Jenis Vitamin</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vtmn as $no=>$item)
                        <tr>
                            <td class="text-center">{{$no+1}}</td>
                            <td class="text-center">{{date("d/M/Y", strtotime($item->tanggal));}}</td>
                            <td class="text-center">{{$item->umur}} bulan</td>
                            <td class="text-center">{{$item->jenis_vitamin}}</td>

                        </tr>
                        @endforeach
                       
                    </tbody>
                    </table>
                
            </div>
        </div>
    </div>





@endsection

@section('js')

@endsection