
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPDKM</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/vendors/chartjs/Chart.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('logo1.jpg')}}" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .kop-surat {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            /* border-bottom: 2px solid black; */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .kop-surat img {
            width: 80px;
            height: 80px;
            margin-right: 20px;
        }
        .kop-surat .text {
            text-align: center;
        }
        .kop-surat .text h1 {
            margin: 0;
            font-size: 24px;
        }
        .kop-surat .text h2 {
            margin: 0;
            font-size: 20px;
            font-weight: normal;
        }
        .kop-surat .text h3 {
            margin: 0;
            font-size: 16px;
            font-weight: normal;
        }
        .kop-surat .text p {
            margin: 0;
            font-size: 16px;
            font-style: italic;
        }

        h1{
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="kop-surat">
        
        <img src="{{asset('logo1.jpg')}}" alt="Logo Posyandu"> <!-- Ganti logo.png dengan path logo -->
        <div class="text">
            <center>
            <h1 class>Sistem Informasi Posyandu Desa Karang Mekar</h1>
            @if ($users == 1)
                <h2>Posyandu Nusa Indah</h2>
                
            @elseif ($users == 2)
                <h2>Posyandu Dahlia</h2>
            @elseif ($users == 3)
                <h2>Posyandu Mawar Merah</h2>
                
            @elseif ($users == 4)
                <h2>Posyandu Melati Putih</h2>
                
            @elseif ($users == 5)
                <h2>Posyandu Aster</h2>
                
            @elseif ($users == 6)
                <h2>Posyandu Anggrek</h2>
            @endif
            <h3>Hasil Kegiatan Posyandu</h3>
        </center>
        </div>

    </div>
    
</div>

    <div class="card">
             <center>
    <h4 class="m-3 p-3" style="background-color: yellow">Hasil Kegiatan Posyandu</h4>
    <hr>
</center>
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
            <div class="card-header">
                <h4 class="m-3">Data Penimbangan</h4>
            </div>
            
         
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
            <div class="card-header">
                <h4 class="m-3">Data Imunisasi</h4>
            </div>
           
         
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
            <div class="card-header">
                <h4 class="m-3">Data Vitamin</h4>
            </div>
            
         
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
</body>
</html>

<script type="text/javascript">
    window.print();
</script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/js/vendors.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>