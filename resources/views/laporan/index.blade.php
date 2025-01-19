@extends('layout.app')
@section('content')
    <div class="main-content container-fluid">

        <div class="page-title">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Cetak Laporan</h3>
                    <p class="text-subtitle text-muted">Anda dapat mencetak laporan data
                        bayi/balita/penimbangan/imunisasi/vitamin dengan mengklik salah satu tombol dibawah ini.</p>
                </div>

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
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-outline-primary m-3" data-toggle="modal"
                            data-target="#exampleModalLong">
                            <i class="fas fa-baby fa-lg"></i><br>Cetak Laporan Data Bayi/Balita
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-outline-primary m-3" data-toggle="modal"
                            data-target="#exampleModalLong1">
                            <i class="fa-solid fa-scale-balanced fa-lg"></i><br>Cetak Laporan Data Penimbangan
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-outline-primary m-3" data-toggle="modal"
                            data-target="#exampleModalLong2">
                            <i class="fas fa-syringe fa-lg"></i><br>Cetak Laporan Data Imunisasi
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-outline-primary m-3" data-toggle="modal"
                            data-target="#exampleModalLong3">
                            <i class="fas fa-pills fa-lg"></i><br>Cetak Laporan Data Vitamin
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cetak Laporan Data Bayi/Balita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Masukan tanggal awal & tangal akhir pada form dibawah ini sebagai batasan dalam mencetak laporan
                        anda.</p>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tglawal" name="tglawal"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tglakhir" name="tglakhir"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <a href=""
                            onclick="this.href='/cetak-laporan-data-bayi-balita/'+document.getElementById('tglawal').value+'/'+document.getElementById('tglakhir').value"
                            target="_blank">
                            <button type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Cetak</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cetak Laporan Data Penimbangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Masukan tanggal awal & tangal akhir pada form dibawah ini sebagai batasan dalam mencetak laporan
                        anda.</p>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tglawal1" name="tglawal"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tglakhir1" name="tglakhir"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <a href=""
                            onclick="this.href='/cetak-laporan-data-penimbangan/'+document.getElementById('tglawal1').value+'/'+document.getElementById('tglakhir1').value"
                            target="_blank">
                            <button type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Cetak</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cetak Laporan Data Imunisasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Masukan tanggal awal & tangal akhir pada form dibawah ini sebagai batasan dalam mencetak laporan
                        anda.</p>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tglawal2" name="tglawal"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tglakhir2" name="tglakhir"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <a href=""
                            onclick="this.href='/cetak-laporan-data-imunisasi/'+document.getElementById('tglawal2').value+'/'+document.getElementById('tglakhir2').value"
                            target="_blank">
                            <button type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Cetak</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cetak Laporan Data Vitamin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Masukan tanggal awal & tangal akhir pada form dibawah ini sebagai batasan dalam mencetak laporan
                        anda.</p>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tglawal3" name="tglawal"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tglakhir3" name="tglakhir"
                            placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <a href=""
                            onclick="this.href='/cetak-laporan-data-vitamin/'+document.getElementById('tglawal3').value+'/'+document.getElementById('tglakhir3').value"
                            target="_blank">
                            <button type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Cetak</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('#multiple').select2({
                dropdownParent: $("#exampleModalLong"),
                width: '100%'
            });

            $('#id').select2({
                dropdownParent: $("#exampleModalLong"),
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
                                    'Januari', 'Februari', 'Maret', 'April', 'Mei',
                                    'Juni',
                                    'Juli', 'Agustus', 'September', 'Oktober',
                                    'November', 'Desember'
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
                                const yearsDifference = today.getFullYear() - dob
                                    .getFullYear();
                                const monthsDifference = today.getMonth() - dob.getMonth();
                                let totalMonths = yearsDifference * 12 + monthsDifference;

                                // Jika hari ini lebih kecil dari hari lahir, kurangi 1 bulan
                                if (today.getDate() < dob.getDate()) {
                                    totalMonths -= 1;
                                }

                                return totalMonths > 0 ? totalMonths :
                                    0; // Pastikan umur tidak negatif
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
            $('.umur, #berat_badan').on('input', function() {
                var umur = $('.umur').val();
                var berat_badan = $('#berat_badan').val();

                if (umur && berat_badan) {
                    $.ajax({
                        url: "{{ route('calculateGizi') }}",
                        type: "GET",
                        data: {
                            umur: umur,
                            berat_badan: berat_badan
                        },
                        success: function(response) {
                            if (response.status_gizi) {
                                $('#status_gizi').val(response.status_gizi);
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                        }
                    });
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
            border: 1px solid #ced4da;
            /* Border default Bootstrap */
            border-radius: 0.25rem;
            /* Radius border Bootstrap */
            height: calc(2.25rem + 2px);
            /* Tinggi input Bootstrap */
            padding: 0.375rem 0.75rem;
            /* Padding input Bootstrap */
            background-color: #fff;
            /* Warna latar belakang */
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 1.50rem;
            /* line-height: calc(2.25rem - 2px); */
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
            /* Sesuaikan tinggi panah */
            right: 0.75rem;
            /* Sesuaikan posisi panah */
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #6c757d;
            /* Warna placeholder */
        }
    </style>
@endsection
