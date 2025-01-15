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
                <i data-feather="plus" width="20" class="mb-1"></i>&nbsp;Tambah Data Bayi/Balita
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
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pyb as $no => $item)
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
                                    <td>
                                      <button class="btn btn-sm btn-success m-1">
                                        <i data-feather="eye" width="30" class="mb-1"></i>
                                      </button>
                                      <button class="btn btn-sm btn-primary m-1" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
                                        <i data-feather="edit" width="30" class="mb-1"></i>
                                      </button>
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

  <form action="{{url('/tambah-balita')}}" method="POST">
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
                      <div class="form-group">
                        <label for="basicInput">Nik Anak</label>
                        <input type="text" class="form-control" id="basicInput" name="nik_anak"
                            placeholder="Masukan Nik Anak" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">No KK</label>
                        <input type="text" class="form-control" id="basicInput" name="no_kk"
                            placeholder="Masukan No KK" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Nama Anak</label>
                        <input type="text" class="form-control" id="basicInput" name="nama_anak"
                            placeholder="Masukan Nama Anak" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Nama Ibu</label>
                        <input type="text" class="form-control" id="basicInput" name="nama_ibu"
                            placeholder="Masukan Nama Ibu" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Nama Ayah</label>
                        <input type="text" class="form-control" id="basicInput" name="nama_ayah"
                            placeholder="Masukan Nama Ayah" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Anak Ke-</label>
                        <input type="text" class="form-control" id="basicInput" name="anak_ke"
                            placeholder="Masukan Anak Ke-" required>
                    </div>
                    <div class="form-group">
                      <label for="basicInput" class="mb-2">Jenis Kelamin</label>
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jk" value="Laki-laki"
                                      id="flexRadioDefault1" required>
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Laki-laki
                                  </label>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jk" value="Perempuan"
                                      id="flexRadioDefault1" required>
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Perempuan
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <hr>
                  </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="basicInput">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="ttl" onchange="calculateAge()"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Umur (Dalam Bulan)</label>
                        <input type="text" class="form-control" id="umur" name="umur"
                        placeholder="Otomatis Muncul" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Berat Badan (Kg)</label>
                        <input type="text" class="form-control" id="basicInput" name="berat_badan"
                            placeholder="Masukan Angka Saja" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Panjang Badan (Cm)</label>
                        <input type="text" class="form-control" id="basicInput" name="panjang_badan"
                            placeholder="Masukan Angka Saja" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Lingkar Lengan (Cm)</label>
                        <input type="text" class="form-control" id="basicInput" name="lingkar_lengan"
                            placeholder="Masukan Angka Saja" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Lingkar Kepala (Cm)</label>
                        <input type="text" class="form-control" id="basicInput" name="lingkar_kepala"
                            placeholder="Masukan Angka Saja" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Alamat</label>
                        <textarea type="text" class="form-control" id="basicInput" name="alamat"
                            placeholder="Masukan Alamat" required> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">No HP Orang Tua</label>
                        <input type="text" class="form-control" id="basicInput" name="no_hp_ortu"
                            placeholder="Masukan No HP Orang Tua" required>
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
  </form>

  @foreach ($pyb as $item)
<form action="{{url('hapus-balita/'. $item->id)}}" method="POST">
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
                    Apakah anda yakin ingin menghapus data bayi/balita <b>{{$item->nama_anak}}</b>?
                    </p>
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
</form>
@endforeach

@foreach ($pyb as $item)
<form action="{{url('edit-balita/'. $item->id)}}" method="POST">
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
                  <input type="date" class="form-control" id="a" name="ttl" onchange="calculateAge()"
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
</form>
@endforeach

@endsection

@section('js')
<script>
  // Fungsi untuk menghitung umur dalam bulan
  function calculateAge() {
      const dobInput = document.getElementById("tanggal_lahir").value;
      const umurInput = document.getElementById("umur");

      if (dobInput) {
          const dob = new Date(dobInput);
          const today = new Date();

          const yearsDifference = today.getFullYear() - dob.getFullYear();
          const monthsDifference = today.getMonth() - dob.getMonth();

          // Total bulan
          let totalMonths = yearsDifference * 12 + monthsDifference;

          // Jika hari ini lebih kecil dari hari lahir, kurangi 1 bulan
          if (today.getDate() < dob.getDate()) {
              totalMonths -= 1;
          }

          umurInput.value = totalMonths > 0 ? totalMonths : 0; // Pastikan umur tidak negatif
      } else {
          umurInput.value = ""; // Kosongkan jika tanggal lahir belum diisi
      }
  }
</script>

<script>
  // Fungsi untuk menghitung umur dalam bulan
  function calculateAge() {
      const dobInput = document.getElementById("a").value;
      const umurInput = document.getElementById("b");

      if (dobInput) {
          const dob = new Date(dobInput);
          const today = new Date();

          const yearsDifference = today.getFullYear() - dob.getFullYear();
          const monthsDifference = today.getMonth() - dob.getMonth();

          // Total bulan
          let totalMonths = yearsDifference * 12 + monthsDifference;

          // Jika hari ini lebih kecil dari hari lahir, kurangi 1 bulan
          if (today.getDate() < dob.getDate()) {
              totalMonths -= 1;
          }

          umurInput.value = totalMonths > 0 ? totalMonths : 0; // Pastikan umur tidak negatif
      } else {
          umurInput.value = ""; // Kosongkan jika tanggal lahir belum diisi
      }
  }
</script>
@endsection