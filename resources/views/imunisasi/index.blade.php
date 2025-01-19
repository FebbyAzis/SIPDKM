@extends('layout.app')
@section('content')
    <div class="main-content container-fluid">

        <div class="page-title">
          <div class="row">
            <div class="col-sm-6">
              <h3>Data Bayi/Balita</h3>
              <p class="text-subtitle text-muted">Anda dapat mengelola data bayi/balita pada halaman ini.</p>
            </div>
            <div class="col-sm-6 text-right">
              <button type="button" class="btn btn-outline-primary m-3" data-toggle="modal" data-target="#exampleModalLong">
                <i data-feather="plus" width="20" class="mb-1"></i>&nbsp;Tambah Imunisasi
            </button>
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
                                <th>Tanggal Imunisasi</th>
                                <th>Nik Anak</th>
                                <th>Nama Anak</th>
                                <th>Umur</th>
                                <th>Jenis Imunisasi</th>
                               
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imun as $no => $item)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{date("d/M/Y", strtotime($item->tanggal));}}</td>
                                    <td>{{ $item->data_bayi_balita->nik_anak }}</td>
                                    <td>{{ $item->data_bayi_balita->nama_anak }}</td>
                                    <td>{{ $item->data_bayi_balita->umur }} bln</td>
                                    <td>{{ $item->jenis_imunisasi }}</td>
                                    
                                    
                                    <td>
                                     
                                      {{-- <button class="btn btn-sm btn-primary m-1" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
                                        <i data-feather="edit" width="30" class="mb-1"></i>
                                      </button> --}}
                                      <button class="btn btn-sm btn-danger m-1" data-toggle="modal" data-target="#default{{$item->id}}">
                                        <i data-feather="trash" width="30" class="mb-1"></i>
                                      </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

  <form id="searchForm" action="{{url('/tambah-imunisasi')}}" method="POST">
    @csrf
      @method('POST')
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Form Tambah Data Bayi/Balita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                
                    <div class="col-sm-6">
                        <h5 class="text-center">Data Anak</h5>
                        <fieldset class="form-group">
                            <label for="basicInput">Nama Anak - Nama Ibu</label><br>
                            <select class="form-select" id="id">
                                <option>Masukan Nama Anak</option>
                                @foreach ($py as $item)
                                <option value="{{$item->id}}">{{$item->nama_anak}} - {{$item->nama_ibu}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        {{-- <fieldset class="form-group">
                            <label for="basicInput">Nama Ibu</label>
                            <select class="form-select" id="nama_ibu">
                                <option>Masukan Nama Ibu</option>
                                @foreach ($py as $item)
                                <option>{{$item->nama_ibu}}</option>
                                @endforeach
                            </select>
                        </fieldset> --}}
                    <hr>
                    <div id="result" style="margin-top: 20px; display: none;">
                        <input type="hidden" name="data_bayi_balita_id" id="result_id"></p>
                        <p><strong>Nik Anak :</strong><br><span id="result_nik_anak"></span></p>
                        <p><strong>Nama Anak :</strong><br><span id="result_nama_anak"></span></p>
                        <p><strong>Jenis Kelamin :</strong><br><span id="result_jk"></span></p>
                        <p><strong>Tanggal Lahir :</strong><br><span id="result_tanggal"></span></p>
                        
                        <p><strong>Nama Ayah :</strong><br><span id="result_nama_ayah"></span></p>
                        <p><strong>Nama Ibu :</strong><br><span id="result_nama_ibu"></span></p>
                        <p><strong>Alamat :</strong><br><span id="result_alamat"></span></p>
                      
                    </div>
                  </div>

                    <div class="col-sm-6">
                        <h5 class="text-center">Data Imunisasi</h5>
                      <div class="form-group">
                        <label for="basicInput">Tanggal Imunisasi</label>
                        <input type="date" class="form-control" id="" name="tanggal" 
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Umur (Dalam Bulan)</label>
                        <input type="text" class="form-control" id="result_umur" name="umur"
                        placeholder="Otomatis Muncul" required readonly>
                    </div>
                    <fieldset class="form-group">
                            <label for="basicInput">Jenis Imunisasi</label>
                            <select class="form-select" name="jenis_imunisasi[]" id="multiple" multiple required>
                                <option>Pilih Jenis Imunisasi</option>
                                <option value="Hepatitis B (HB-0)">Hepatitis B (HB-0)</option>
                                <option value="Polio Tetes 1 (OPV 1)">Polio Tetes 1 (OPV 1)</option>
                                <option value="BCG">BCG</option>
                                <option value="DPT-HB-Hib 1">DPT-HB-Hib 1</option>
                                <option value="Polio Tetes 2 (OPV 2)">Polio Tetes 2 (OPV 2)</option>
                                <option value="PCV 1">PCV 1</option>
                                <option value="RV 1">RV 1</option>
                                <option value="DPT-HB-Hib 2">DPT-HB-Hib 2</option>
                                <option value="Polio Tetes 3 (OPV 3)">Polio Tetes 3 (OPV 3)</option>
                                <option value="PCV 2">PCV 2</option>
                                <option value="RV 2">RV 2</option>
                                <option value="DPT-HB-Hib 3">DPT-HB-Hib 3</option>
                                <option value="Polio Tetes 4 (OPV 4)">Polio Tetes 4 (OPV 4)</option>
                                <option value="Polio Suntik 1 (IPV 1)">Polio Suntik 1 (IPV 1)</option>
                                <option value="RV 3">RV 3</option>
                                <option value="Campak Rubela 1">Campak Rubela 1</option>
                                <option value="Polio Suntik 2 (IPV 2)">Polio Suntik 2 (IPV 2)</option>
                                <option value="JE*">JE*</option>
                                <option value="PCV 3">PCV 3</option>
                                <option value="DPT-HB-Hib 4">DPT-HB-Hib 4</option>
                                <option value="Campak Rubela 2">Campak Rubela 2</option>
                               
                            </select>
                        </fieldset>
                    </div>
                  </div>
                  <input type="hidden" name="posyandu_id" value="{{$users}}">


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

  @foreach ($imun as $item)
<form action="{{url('hapus-imunisasi/'. $item->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <div class="modal fade text-left" id="default{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Hapus Data Bayi/Balita</h5>
                    <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                    Apakah anda yakin ingin menghapus data imunisasi bayi/balita <b>{{$item->data_bayi_balita->nama_anak}}</b>?
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
@endforeach

@foreach ($imun as $item)
{{-- <form action="{{url('edit-balita/'. $item->id)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Form Edit Data Bayi/Balita</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i data-feather="x"></i>
              </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="basicInput">Nik Anak</label>
                  <input type="text" class="form-control" id="basicInput" name="nik_anak"
                      placeholder="Masukan Nik Anak" value="{{$item->nik_anak}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">No KK</label>
                  <input type="text" class="form-control" id="basicInput" name="no_kk"
                      placeholder="Masukan No KK" value="{{$item->no_kk}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Nama Anak</label>
                  <input type="text" class="form-control" id="basicInput" name="nama_anak"
                      placeholder="Masukan Nama Anak" value="{{$item->nama_anak}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Nama Ibu</label>
                  <input type="text" class="form-control" id="basicInput" name="nama_ibu"
                      placeholder="Masukan Nama Ibu" value="{{$item->nama_ibu}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Nama Ayah</label>
                  <input type="text" class="form-control" id="basicInput" name="nama_ayah"
                      placeholder="Masukan Nama Ayah" value="{{$item->nama_ayah}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Anak Ke-</label>
                  <input type="text" class="form-control" id="basicInput" name="anak_ke"
                      placeholder="Masukan Anak Ke-" value="{{$item->anak_ke}}" required>
              </div>
              <div class="form-group">
                <label for="basicInput" class="mb-2">Jenis Kelamin</label>
                <div class="row">
                    <div class="col-sm-6">
                      @if ($item->jk == "Laki-laki")
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki"
                            id="flexRadioDefault1" checked required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                      @else
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki"
                            id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>  
                      @endif
                      @if ($item->jk == "Perempuan")
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan"
                            id="flexRadioDefault1" checked required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label>
                    </div>
                      @else
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan"
                            id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label>
                    </div>  
                      @endif
                        
                    </div>
                    
                </div>
            </div>
            <hr>
            </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="basicInput">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="a" name="ttl" onchange="calculateAge1()"
                      placeholder="Masukan Tanggal Lahir" value="{{$item->ttl}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Umur (Dalam Bulan)</label>
                  <input type="text" class="form-control" id="b" name="umur"
                  placeholder="Otomatis Muncul" value="{{$item->umur}}" required readonly>
              </div>
              <div class="form-group">
                  <label for="basicInput">Berat Badan (Kg)</label>
                  <input type="text" class="form-control" id="basicInput" name="berat_badan"
                      placeholder="Masukan Angka Saja" value="{{$item->berat_badan}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Panjang Badan (Cm)</label>
                  <input type="text" class="form-control" id="basicInput" name="panjang_badan"
                      placeholder="Masukan Angka Saja" value="{{$item->panjang_badan}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Lingkar Lengan (Cm)</label>
                  <input type="text" class="form-control" id="basicInput" name="lingkar_lengan"
                      placeholder="Masukan Angka Saja" value="{{$item->lingkar_lengan}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Lingkar Kepala (Cm)</label>
                  <input type="text" class="form-control" id="basicInput" name="lingkar_kepala"
                      placeholder="Masukan Angka Saja" value="{{$item->lingkar_kepala}}" required>
              </div>
              <div class="form-group">
                  <label for="basicInput">Alamat</label>
                  <textarea type="text" class="form-control" id="basicInput" name="alamat"
                      placeholder="Masukan Alamat" required>{{$item->alamat}}</textarea>
              </div>
              <div class="form-group">
                  <label for="basicInput">No HP Orang Tua</label>
                  <input type="text" class="form-control" id="basicInput" name="no_hp_ortu"
                      placeholder="Masukan No HP Orang Tua" value="{{$item->no_hp_ortu}}" required>
              </div>
              </div>
            </div>
            


          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger">
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
</form> --}}
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