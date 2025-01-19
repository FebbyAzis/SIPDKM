@extends('layout.app')
@section('content')
    

<div class="main-content container-fluid">
    
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">Selamat datang di website SIPDKM</p>
    </div>
    <section class="section">
        @if (Auth::user()->role == 2)
        <div class="row match-height">
            <div class="col-12">
                <div class="card-group">
                    <div class="card m-2" style="background-color: #5A8DEE">
                        <div class="card-content">
                            
                            <div class="card-body" >
                                <h4 class="card-title text-white">Total Data<br>Bayi/Balita</h4>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h1 class="card-text text-white">
                                            {{$py}}</h1>
                                        <small class="text-white">SIPDKM</small>
                                    </div>
                                    <div class="col-sm-4">
                                        <center><i class="fas fa-baby fa-3x text-white"></i></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2">
                        <div class="card-content">
                            
                            <div class="card-body">
                                <h4 class="card-title">Total Data<br>Penimbangan</h4>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h1 class="card-text ">
                                            {{$tmbng}}</h1>
                                        <small class="">SIPDKM</small>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="fa-solid fa-scale-balanced fa-3x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2" style="background-color: #5A8DEE">
                        <div class="card-content" >
                           
                            <div class="card-body">
                                <h4 class="card-title text-white">Total Data<br>Imunisasi</h4>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h1 class="card-text text-white">
                                            {{$imun}}</h1>
                                        <small class="text-white">SIPDKM</small>
                                    </div>
                                    <div class="col-sm-4">
                                        <center><i class="fas fa-syringe fa-3x text-white"></i></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2">
                        <div class="card-content">
                           
                            <div class="card-body">
                                <h4 class="card-title ">Total Data<br>Vitamin</h4>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h1 class="card-text ">
                                            {{$vtmn}}</h1>
                                        <small class="">SIPDKM</small>
                                    </div>
                                    <div class="col-sm-4">
                                        <center><i class="fas fa-pills fa-3x text-primary"></i></center>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </section>
<br>
    <div class="card">
        <div class="card-body text-center">
            <img src="logo1.jpg" alt="">
        </div>
    </div>
</div>

@endsection