
{{-- @php
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

$user = Auth::user();

$users = Users::where('role')->get();
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPDKM</title>
    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/vendors/chartjs/Chart.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('logo1.jpg')}}" type="image/x-icon">
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

            <li class='sidebar-title'>Main Menu</li>
        
            <li class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
                
            </li>

            <li class="sidebar-item ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Posyandu Nusa Indah</span>
                </a>
                
            </li>

            <li class="sidebar-item ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Posyandu Dahlia</span>
                </a>
                
            </li>

            <li class="sidebar-item ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Posyandu Mawar Merah</span>
                </a>
                
            </li>

            <li class="sidebar-item ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Posyandu Melati Putih</span>
                </a>
                
            </li>
        
            <li class="sidebar-item ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Posyandu After</span>
                </a>
                
            </li>

            <li class="sidebar-item ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Posyandu Anggrek</span>
                </a>
                
            </li>
        
            <li class='sidebar-title'>Other</li>
      
            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Imunisasi</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Vitamin</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Jadwal</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Laporan</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Riwayat Vaksin</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Data Petugas</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Data Penimbangan</span>
                </a>
                
            </li>

            <hr>
        <br>
        <br>
        </ul>
        @endif
        @if (Auth::user()->role == 2) 
        <ul class="menu">

            <li class='sidebar-title'>Main Menu</li>
        
            <li class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
                
            </li>

            <li class="sidebar-item ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Posyandu Balita</span>
                </a>
                
            </li>

        
            <li class='sidebar-title'>Other</li>
      
            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Imunisasi</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Vitamin</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Jadwal</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Laporan</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Riwayat Vaksin</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Data Petugas</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i> 
                    <span>Data Penimbangan</span>
                </a>
                
            </li>

            <hr>
        <br>
        <br>
        </ul>
        @endif
        @if (Auth::user()->role == 3)
        <ul class="menu">

            <li class='sidebar-title'>Main Menu</li>
        
            <li class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
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
                <div class="col-sm-9 pt-2 text-center">
                    <h3>Sistem Informasi Posyandu Desa Karang Mekar</h3>
                </div>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="{{asset('assets/images/avatar/avatar-s-1.png')}}" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">{{AUTH::user()->name}}</div>
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
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    
    <script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
