
@php
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

$user = Auth::user();

$users = $user->posyandu;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIPDKM</title>
    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/vendors/chartjs/Chart.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('logo1.jpg')}}" type="image/x-icon">
    @yield('css')
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{asset('logo1.jpg')}}">
        
    </div>
    
    <div class="sidebar-menu">
        @if (Auth::user()->role == 1)
        <ul class="menu">
            
            <h5 class="text-center">Administrator</h5>
            <li class='sidebar-title'>Main Menu</li>
        
            <li class="sidebar-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                <a href="{{url('/dashboard')}}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('posyandu-nusa-indah*') ? 'active' : '' }}">
                <a href="{{url('/posyandu-nusa-indah')}}" class='sidebar-link'>
                    <i class="fas fa-user-nurse"></i> 
                    <span>Posyandu Nusa Indah</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('posyandu-dahlia*') ? 'active' : '' }}">
                <a href="{{url('/posyandu-dahlia')}}" class='sidebar-link'>
                    <i class="fas fa-user-nurse"></i> 
                    <span>Posyandu Dahlia</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('posyandu-mawar-merah*') ? 'active' : '' }}">
                <a href="{{url('/posyandu-mawar-merah')}}" class='sidebar-link'>
                    <i class="fas fa-user-nurse"></i> 
                    <span>Posyandu Mawar Merah</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('posyandu-melati-putih*') ? 'active' : '' }}">
                <a href="{{url('/posyandu-melati-putih')}}" class='sidebar-link'>
                    <i class="fas fa-user-nurse"></i> 
                    <span>Posyandu Melati Putih</span>
                </a>
                
            </li>
        
            <li class="sidebar-item {{ request()->is('posyandu-aster*') ? 'active' : '' }}">
                <a href="{{url('/posyandu-aster')}}" class='sidebar-link'>
                    <i class="fas fa-user-nurse"></i> 
                    <span>Posyandu Aster</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('posyandu-anggrek*') ? 'active' : '' }}">
                <a href="{{url('posyandu-anggrek')}}" class='sidebar-link'>
                    <i class="fas fa-user-nurse"></i> 
                    <span>Posyandu Anggrek</span>
                </a>
                
            </li>
        
            <li class='sidebar-title'>Other</li>
      
            <li class="sidebar-item {{ request()->is('data-pengguna*') ? 'active' : '' }}">
                <a href="{{url('/data-pengguna')}}" class='sidebar-link'>
                    <i class="fas fa-users"></i> 
                    <span>Data Pengguna</span>
                </a>
                
            </li>
            <br>
            <center>
                <button type="button" class="btn btn-outline-danger w-75" data-toggle="modal" data-target="#default">
                    <i class="fas fa-door-open"></i>&nbsp; Logout
                </button>
            </center>

        <br>
        <br>
        </ul>
        @endif
        @if (Auth::user()->role == 2) 
        <ul class="menu">
            @if ($users == 1)
            <h5 class="text-center">Posyandu Nusa Indah</h5>
            @elseif ($users == 2)
            <h5 class="text-center">Posyandu Dahlia</h5>
            @elseif ($users == 3)
            <h5 class="text-center">Posyandu Mawar Merah</h5>
            @elseif ($users == 4)
            <h5 class="text-center">Posyandu Melati Putih</h5>
            @elseif ($users == 5)
            <h5 class="text-center">Posyandu Melati Aster</h5>
            @elseif ($users == 6)
            <h5 class="text-center">Posyandu Melati Anggrek</h5>
            @endif
            
            <li class='sidebar-title'>Main Menu</li>
        
            <li class="sidebar-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                <a href="{{url('/dashboard')}}" class='sidebar-link'>
                    <i class="fas fa-home ml-2"></i> 
                    <span>Dashboard</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('data-bayi-balita*') ? 'active' : '' }} {{ request()->is('detail-data-bayi-balita*') ? 'active' : '' }}">
                <a href="{{url('/data-bayi-balita')}}" class='sidebar-link'>
                    <i class="fas fa-baby ml-2" style="font-size: 18px;"></i>
                    <span>Data Bayi/Balita</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('penimbangan*') ? 'active' : '' }}">
                <a href="{{url('/penimbangan')}}" class='sidebar-link'>
                    <i class="fa-solid fa-scale-balanced ml-2" style="font-size: 13px;"></i> 
                    <span>Penimbangan</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('imunisasi*') ? 'active' : '' }}">
                <a href="{{url('/imunisasi')}}" class='sidebar-link'>
                    <i class="fas fa-syringe ml-2" style="font-size: 16px;"></i> 
                    <span>Imunisasi</span>
                </a>
                
            </li>

            <li class="sidebar-item {{ request()->is('vitamin*') ? 'active' : '' }}">
                <a href="{{url('/vitamin')}}" class='sidebar-link'>
                    <i class="fas fa-pills ml-2" style="font-size: 15px;"></i> 
                    <span>Vitamin</span>
                </a>
                
            </li>
            
            <li class='sidebar-title'>Other</li>
            <li class="sidebar-item {{ request()->is('cetak-laporan*') ? 'active' : '' }}">
                <a href="{{url('/cetak-laporan')}}" class='sidebar-link'>
                    <i class="fas fa-file ml-2" style="font-size: 16px;"></i> 
                    <span>&nbsp;Laporan</span>
                </a>
                
            </li>
            <br>
            <center>
                <button type="button" class="btn btn-outline-danger w-75" data-toggle="modal" data-target="#default">
                    <i class="fas fa-door-open"></i>&nbsp; Logout
                </button>
            </center>
            
            
           
        
                <br>
        <br>
        </ul>
        @endif
        @if (Auth::user()->role == 3)
        <ul class="menu">

            <li class='sidebar-title'>Main Menu</li>
        
            <li class="sidebar-item {{ request()->is('dashboard*') ? 'active' : '' }} ">
                <a href="{{url('/dashboard')}}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
                
            </li>


            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Laporan</span>
                </a>
                
            </li>


            <hr>
        <br>
        <br>
        </ul>    
        
        @endif
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-sm-9 pt-2">
                    <center><h3 class="ml-5">Sistem Informasi Posyandu Desa Karang Mekar</h3></center>
                </div>
                
                <div class="collapse navbar-collapse mr-3" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="{{asset('user.png')}}" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block" style="font-size: 16px">{{AUTH::user()->name}}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i data-feather="log-out"></i> Logout</a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <hr>

            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2025 &copy; SIPDKM</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted by Zulfi</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <form  action="{{ route('logout') }}" method="POST">
        @csrf
        <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel1">Logout</h5>
                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        Apakah anda yakin ingin keluar dari website <b>SIPDKM</b>?
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
    <script src="{{asset('assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    
    <script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @yield('js')
</body>
</html>
