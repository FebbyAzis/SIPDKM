<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPDKM</title>
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
            border-bottom: 2px solid black;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;

        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #e0e0e0;
        }
        h1{
            font-size: 18px;
        }
    </style>
</head>
<body>
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
            <h3>Laporan Data Penimbangan</h3>
        </center>
        </div>

    </div>
    <div class="card">
        <center>
        <h1>Data Penimbangan</h1>
    </center>
        <div class="col-sm-12">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Penimbangan</th>
                        <th>Nik Anak</th>
                        <th>Nama Anak</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Berat Badan</th>
                        <th>Keterangan</th>
                        <th>Status Gizi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tmbng as $no=>$item)
                    <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->data_bayi_balita->nik_anak}}</td>
                        <td>{{$item->data_bayi_balita->nama_anak}}</td>
                        <td>{{$item->data_bayi_balita->jk}}</td>
                        <td>{{$item->umur}}</td>
                        <td>{{$item->berat_badan}}</td>
                        <td>{{$item->keterangan}}</td>
                        <td>{{$item->status_gizi}}</td>
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