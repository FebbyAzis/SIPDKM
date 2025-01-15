@extends('layout.app')
@section('content')
    

<div class="main-content container-fluid">
    
    <div class="page-title">
        <h3>Posyandu Balita</h3>
        <p class="text-subtitle text-muted">Anda dapat mengelola data terkait balita pada halaman ini.</p>
    </div>
    
    <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tabel Data Posyandu Balita</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a
              <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
          </div>
          <!-- table hover -->
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>NAME</th>
                  <th>RATE</th>
                  <th>SKILL</th>
                  <th>TYPE</th>
                  <th>LOCATION</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-bold-500">Michael Right</td>
                  <td>$15/hr</td>
                  <td class="text-bold-500">UI/UX</td>
                  <td>Remote</td>
                  <td>Austin,Taxes</td>
                  <td><a href="#"><i
                        class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                </tr>
                <tr>
                  <td class="text-bold-500">Morgan Vanblum</td>
                  <td>$13/hr</td>
                  <td class="text-bold-500">Graphic concepts</td>
                  <td>Remote</td>
                  <td>Shangai,China</td>
                  <td><a href="#"><i
                        class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                </tr>
                <tr>
                  <td class="text-bold-500">Tiffani Blogz</td>
                  <td>$15/hr</td>
                  <td class="text-bold-500">Animation</td>
                  <td>Remote</td>
                  <td>Austin,Texas</td>
                  <td><a href="#"><i
                        class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                </tr>
                <tr>
                  <td class="text-bold-500">Ashley Boul</td>
                  <td>$15/hr</td>
                  <td class="text-bold-500">Animation</td>
                  <td>Remote</td>
                  <td>Austin,Texas</td>
                  <td><a href="#"><i
                        class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                </tr>
                <tr>
                  <td class="text-bold-500">Mikkey Mice</td>
                  <td>$15/hr</td>
                  <td class="text-bold-500">Animation</td>
                  <td>Remote</td>
                  <td>Austin,Texas</td>
                  <td><a href="#"><i
                        class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                </tr>
                adadwda
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>

@endsection