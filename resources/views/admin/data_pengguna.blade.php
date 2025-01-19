@extends('layout.app')
@section('content')
    <div class="main-content container-fluid">

        <div class="page-title">
          <div class="row">
            <div class="col-sm-12">
              <h3>Data Pengguna</h3>
              <p class="text-subtitle text-muted">Anda dapat mengelola data pengguna sistem pada halaman ini.</p>
            
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
            {{-- <div class="card-header">
          <h4 class="card-title">Tabel Data Posyandu Balita</h4>
        </div> --}}
            <div class="card-content">
               
                <!-- table hover -->
                <div class="table-responsive mt-2">
                    <table class="table table-striped table-hover" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama/Username</th>
                                <th>Email</th>
                          
                                <th>Jabatan</th>
                                <th>Akses</th>
                            
                               
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no => $item)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                              
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                

                                    @if ($item->role == 1)
                                        <td>Admin</td>
                                    @elseif ($item->role == 2)
                                        <td>Pengurus Posyandu</td>
                                    @else
                                        <td>Pengguna</td>
                                    @endif

                                    @if ($item->posyandu == 1)
                                        <td>Posyandu Nusa Indah</td>
                                    @elseif ($item->posyandu == 2)
                                        <td>Posyandu Dahlia</td>
                                    @elseif ($item->posyandu == 3)
                                        <td>Posyandu Mawar Merah</td>
                                    @elseif ($item->posyandu == 4)
                                        <td>Posyandu Melati Putih</td>
                                    @elseif ($item->posyandu == 5)
                                        <td>Posyandu Aster</td>
                                    @elseif ($item->posyandu == 6)
                                        <td>Posyandu Anggrek</td>
                                    @elseif ($item->posyandu == 7)
                                        <td>Administrator</td>
                                    @else
                                        <td>Orang Tua/Wali</td>
                                    @endif
                                   
                                    
                                    <td>
                                     
                                      <button class="btn btn-sm btn-primary m-1" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
                                        <i data-feather="edit" width="30" class="mb-1"></i>
                                      </button>
                                      {{-- <button class="btn btn-sm btn-danger m-1" data-toggle="modal" data-target="#default{{$item->id}}">
                                        <i data-feather="trash" width="30" class="mb-1"></i>
                                      </button> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


  {{-- @foreach ($user as $item)
<form action="{{url('hapus-vitamin/'. $item->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <div class="modal fade text-left" id="default{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Hapus Data Vitamin</h5>
                    <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                    Apakah anda yakin ingin menghapus data vitamin bayi/balita <b></b>?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Tidak</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Ya</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach --}}

@foreach ($user as $item)
<form action="{{url('edit-pengguna/'. $item->id)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Form Edit Data Bayi/Balita</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i data-feather="x"></i>
              </button>
          </div>
          <div class="modal-body">
     
        
                <div class="form-group">
                  <label for="basicInput">Nama/Username</label>
                  <input type="text" class="form-control" id="basicInput" name="name"
                      placeholder="Masukan Nik Anak" value="{{$item->name}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Email</label>
                  <input type="text" class="form-control" id="basicInput" name="email"
                      placeholder="Masukan No KK" value="{{$item->email}}" required>
              </div>
              <fieldset class="form-group">
                <label for="basicInput">Jabatan</label>
                <select class="form-select" name="role" id="" required>
                    @if ($item->role == 1)
                    <option value="1">Admin</option>
                    <option value="2">Pengurus Posyandu</option>
                    <option value="3">Pengguna</option>
                    @elseif ($item->role == 2)
                    <option value="2">Pengurus Posyandu</option>
                    <option value="3">Pengguna</option>
                    <option value="1">Admin</option>
                    @elseif ($item->role == 3)
                    <option value="3">Pengguna</option>
                    <option value="2">Pengurus Posyandu</option>
                    <option value="1">Admin</option>
                    @endif   
                </select>
            </fieldset>
                <fieldset class="form-group">
                    <label for="basicInput">Akses</label>
                    <select class="form-select" name="posyandu" id="" required>
                        @if ($item->posyandu == 1)
                            <option value="1">Posyandu Nusa Indah</option>
                            <option value="2">Posyandu Dahlia</option>
                            <option value="3">Posyandu Mawar Merah</option>
                            <option value="4">Posyandu Melati Putih</option>
                            <option value="5">Posyandu Aster</option>
                            <option value="6">Posyandu Anggrek</option>
                            <option value="7">Administrator</option>
                            <option value="0">Orang Tua/Wali</option>
                        @elseif ($item->posyandu == 2)
                            <option value="2">Posyandu Dahlia</option>
                            <option value="1">Posyandu Nusa Indah</option>
                            <option value="3">Posyandu Mawar Merah</option>
                            <option value="4">Posyandu Melati Putih</option>
                            <option value="5">Posyandu Aster</option>
                            <option value="6">Posyandu Anggrek</option>
                            <option value="7">Administrator</option>
                            <option value="0">Orang Tua/Wali</option>
                        @elseif ($item->posyandu == 3)
                            <option value="3">Posyandu Mawar Merah</option>
                            <option value="2">Posyandu Dahlia</option>
                            <option value="1">Posyandu Nusa Indah</option> 
                            <option value="4">Posyandu Melati Putih</option>
                            <option value="5">Posyandu Aster</option>
                            <option value="6">Posyandu Anggrek</option>
                            <option value="7">Administrator</option>
                            <option value="0">Orang Tua/Wali</option>
                        @elseif ($item->posyandu == 4)
                            <option value="4">Posyandu Melati Putih</option>
                            <option value="3">Posyandu Mawar Merah</option>
                            <option value="2">Posyandu Dahlia</option>
                            <option value="1">Posyandu Nusa Indah</option> 
                            <option value="5">Posyandu Aster</option>
                            <option value="6">Posyandu Anggrek</option>
                            <option value="7">Administrator</option>
                            <option value="0">Orang Tua/Wali</option>
                        @elseif ($item->posyandu == 5)
                            <option value="5">Posyandu Aster</option>
                            <option value="4">Posyandu Melati Putih</option>
                            <option value="3">Posyandu Mawar Merah</option>
                            <option value="2">Posyandu Dahlia</option>
                            <option value="1">Posyandu Nusa Indah</option> 
                            <option value="6">Posyandu Anggrek</option>
                            <option value="7">Administrator</option>
                            <option value="0">Orang Tua/Wali</option>
                        @elseif ($item->posyandu == 6)
                            <option value="6">Posyandu Anggrek</option>
                            <option value="5">Posyandu Aster</option>
                            <option value="4">Posyandu Melati Putih</option>
                            <option value="3">Posyandu Mawar Merah</option>
                            <option value="2">Posyandu Dahlia</option>
                            <option value="1">Posyandu Nusa Indah</option> 
                            <option value="7">Administrator</option>
                            <option value="0">Orang Tua/Wali</option>
                        @elseif ($item->posyandu == 7)
                            <option value="7">Administrator</option>
                            <option value="6">Posyandu Anggrek</option>
                            <option value="5">Posyandu Aster</option>
                            <option value="4">Posyandu Melati Putih</option>
                            <option value="3">Posyandu Mawar Merah</option>
                            <option value="2">Posyandu Dahlia</option>
                            <option value="1">Posyandu Nusa Indah</option> 
                            <option value="0">Orang Tua/Wali</option>
                            @elseif ($item->posyandu == 0)
                            <option value="0">Orang Tua/Wali</option>
                            <option value="7">Administrator</option>
                            <option value="6">Posyandu Anggrek</option>
                            <option value="5">Posyandu Aster</option>
                            <option value="4">Posyandu Melati Putih</option>
                            <option value="3">Posyandu Mawar Merah</option>
                            <option value="2">Posyandu Dahlia</option>
                            <option value="1">Posyandu Nusa Indah</option> 
                            
                        @endif   
                    </select>
            </fieldset>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                  <i class="bx bx-x d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Tutup</span>
              </button>

              <button type="submit" class="btn btn-primary ml-1">
                  <i class="bx bx-check d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Simpan</span>
              </button>
          </div>
      </div>
  </div>
</div>
</form>
@endforeach

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('#multiple').select2({dropdownParent: $("#exampleModalLong"),
        width: '100%'
    });

        $('#id').select2({dropdownParent: $("#exampleModalLong"),
        width: '100%'
    });
    
    $('#id').on('change', function() {
    const id = $(this).val();

    if (id) {
        $.ajax({
            url: "{{ route('fetc.detail') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: id
            },
            success: function(data) {
                // Format tanggal ke format Indonesia
                const formatTanggal = (tanggal) => {
                    const bulanIndonesia = [
                        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                    ];
                    const dateObj = new Date(tanggal);
                    const tanggalFormatted = dateObj.getDate();
                    const bulanFormatted = bulanIndonesia[dateObj.getMonth()];
                    const tahunFormatted = dateObj.getFullYear();
                    return `${tanggalFormatted} ${bulanFormatted} ${tahunFormatted}`;
                };

                // Menghitung umur dalam bulan
                const calculateUmurInMonths = (tanggalLahir) => {
                    const today = new Date();
                    const dob = new Date(tanggalLahir);
                    const yearsDifference = today.getFullYear() - dob.getFullYear();
                    const monthsDifference = today.getMonth() - dob.getMonth();
                    let totalMonths = yearsDifference * 12 + monthsDifference;

                    // Jika hari ini lebih kecil dari hari lahir, kurangi 1 bulan
                    if (today.getDate() < dob.getDate()) {
                        totalMonths -= 1;
                    }

                    return totalMonths > 0 ? totalMonths : 0; // Pastikan umur tidak negatif
                };

                // Menampilkan data ke form
                $('#result_id').val(data.id);
                $('#result_nik_anak').text(data.nik_anak);
                $('#result_nama_anak').text(data.nama_anak);
                $('#result_jk').text(data.jk);
                $('#result_tanggal').text(formatTanggal(data.ttl));
                $('#result_tanggal1').val(formatTanggal(data.ttl));
                $('#result_nama_ayah').text(data.nama_ayah);
                $('#result_nama_ibu').text(data.nama_ibu);
                $('#result_alamat').text(data.alamat);

                // Perhitungan umur otomatis
                const umurInMonths = calculateUmurInMonths(data.ttl);
                $('#result_umur').val(`${umurInMonths}`);

                $('#result').show();
            },
            error: function() {
                alert('Data tidak ditemukan');
                $('#result').hide();
            }
        });
    } else {
        $('#result').hide();
    }
});
    });
</script>




@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <style>
/* Menghilangkan panah pada header tabel */
         th {
            cursor: default;
            background-image: none !important;
            background-repeat: no-repeat;
            background-position: center right;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #ced4da; /* Border default Bootstrap */
            border-radius: 0.25rem; /* Radius border Bootstrap */
            height: calc(2.25rem + 2px); /* Tinggi input Bootstrap */
            padding: 0.375rem 0.75rem; /* Padding input Bootstrap */
            background-color: #fff; /* Warna latar belakang */
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 1.50rem; 
            /* line-height: calc(2.25rem - 2px); */
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%; /* Sesuaikan tinggi panah */
            right: 0.75rem; /* Sesuaikan posisi panah */
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #6c757d; /* Warna placeholder */
        }

        
    </style>
@endsection