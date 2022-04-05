
@extends('bases')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  center;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<style>
  /* .buttonsED { 
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
  } */
  .buttonsED button { 
    width: 50%;
  }
  </style>
@section('content')   



@can('isAdmin')
<div class="row g-3 mb-3">
  <div class="col-lg-5 col-xxl-6">
    <div class="card">
      <div class="card-header">
        <h5 class="text-900 fs-0 mb-2">Peratus Lulus Temuduga</h5>
        <h6 class="mb-0 fs--2 text-500">Nov 1, 2021–Jan 25, 2022</h6>
      </div>
      <div class="card-body">
        <div class="echart-bounce-rate h-100" data-echart-responsive="true"></div>
      </div>
      <div class="card-footer bg-light py-2">
        <div class="row flex-between-center g-0">
          <div class="col-auto">
            <select class="form-select form-select-sm" data-target=".echart-bounce-rate">
              <option value="week">7 Hari lalu</option>
              <option value="month" selected="selected">Bulan Lepas</option>
            </select>
          </div>
          <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Lihat laporan<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-7 col-xxl-6">
    <div class="card">
      <div class="card-header d-flex flex-between-center bg-light py-2">
        <h6 class="mb-0">Temuduga</h6>
        <div class="dropdown font-sans-serif btn-reveal-trigger">
          <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-traffic-channel" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-traffic-channel"><a class="dropdown-item" href="#!">Lihat</a><a class="dropdown-item" href="#!">Kongsi</a>
            {{-- <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a> --}}
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="echart-traffic-channels h-100" data-echart-responsive="true"></div>
      </div>
      <div class="card-footer bg-light py-2">
        <div class="row flex-between-center g-0">
          <div class="col-auto">
            <select class="form-select form-select-sm audience-select-menu">
              <option value="week" selected="selected">7 hari lalu</option>
              <option value="month">Bulan Lepas</option>
              <option value="year">Tahun Lepas</option>
            </select>
          </div>
          <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Lihat semua<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>

@else
  
@endcan




{{-- <div class="row g-3 mb-3">
  <div class="col-xxl-6 col-xl-12">
    <div class="row g-3">
      <div class="col-12">
        <div class="card bg-transparent-50 overflow-hidden">
          <div class="card-header position-relative">
            <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;">
            </div>
            <!--/.bg-holder-->

            <div class="position-relative z-index-2">
              <div>
                <h3 class="text-primary mb-1">Selamat Pagi, Jamilah!</h3>
                <p>Tugas Temuduga Minggu Ini </p>
              </div>
              <div class="d-flex py-3">
                <div class="pe-3">
                  <p class="text-600 fs--1 fw-medium">Temuduga Hari Ini </p>
                  <h4 class="text-800 mb-0">38</h4>
                </div>
                <div class="ps-3">
                  <p class="text-600 fs--1">Permohonan Temuduga Bulan Ini </p>
                  <h4 class="text-800 mb-0">450</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <ul class="mb-0 list-unstyled">
              <li class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
                <div class="row flex-between-center">
                  <div class="col">
                    <div class="d-flex">
                      <div class="fas fa-circle mt-1 fs--2"></div>
                      <p class="fs--1 ps-2 mb-0"><strong>56 calon</strong> yang layak temuduga </p>
                    </div>
                  </div>
                  <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">Lihat senarai<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                </div>
              </li>
              <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                <div class="row flex-between-center">
                  <div class="col">
                    <div class="d-flex">
                      <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                      <p class="fs--1 ps-2 mb-0"><strong>71 calon</strong> berjaya dalam temuduga</p>
                    </div>
                  </div>
                  <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">Lihat calon <i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                </div>
              </li>
              <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                <div class="row flex-between-center">
                  <div class="col">
                    <div class="d-flex">
                      <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                      <p class="fs--1 ps-2 mb-0"><strong>50+ calon</strong> yang gagal</p>
                    </div>
                  </div>
                  <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">Lihat sebab<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</div> --}}

<div class="card mb-3 overflow-hidden">
  <div class="card-header">
    <div class="row gx-0 align-items-center">
      <div class="col-auto d-flex justify-content-end order-md-1">
        <button class="btn icon-item icon-item-sm shadow-none p-0 me-1 ms-md-2" type="button" data-event="prev" data-bs-toggle="tooltip" title="Previous"><span class="fas fa-arrow-left"></span></button>
        <button class="btn icon-item icon-item-sm shadow-none p-0 me-1 me-lg-2" type="button" data-event="next" data-bs-toggle="tooltip" title="Next"><span class="fas fa-arrow-right"></span></button>
      </div>
      <div class="col-auto col-md-auto order-md-2">
        <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2 calendar-title"></h4>
      </div>
      <div class="col col-md-auto d-flex justify-content-end order-md-3">
        <button class="btn btn-falcon-primary btn-sm" type="button" data-event="today">Harini</button>
      </div>
      <div class="col-md-auto d-md-none">
        <hr />
      </div>
      <div class="col-auto d-flex order-md-0">
        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>Tambah Jadual</button>
      </div>
      <div class="col d-flex justify-content-end order-md-2">
        <div class="dropdown font-sans-serif me-md-2">
          <button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none" type="button" id="email-filter" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span data-view-title="data-view-title">Paparan Bulan</span><span class="fas fa-sort ms-2 fs--1"></span></button>
          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-filter"><a class="active dropdown-item d-flex justify-content-between" href="#!" data-fc-view="dayGridMonth">Paparan Bulan<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="timeGridWeek">Paparan Minggu<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="timeGridDay">Paparan Hari<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="listWeek">Paparan Senarai<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="listYear">Year View<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body p-0">
    <div class="calendar-outline" id="appCalendar"></div>
  </div>
</div>
<div class="card mb-3 overflow-hidden">
  <div class="card-header">
    <div class="row gx-0 align-items-center">
      <div class="col">
        <h4 class="mb-0">SENARAI TEMUDUGA</h4>
      </div>
      <div class="col-auto text-center pe-card">
        <button class="btn btn-secondary me-1 mb-1"><a style="color: black" href="/ivReg/create"><i class="fa fa-plus-square"></i>Tambah</a></button>
      </div>
    </div>

<br>
{{-- <h2>SENARAI TEMUDUGA</h2> --}}


<table class="table table-striped border-bottom buttonsED" style="text-align: center">
  <tr>
    <th>NAMA</th>
    <th>NO PHONE</th>
    <th>TARIKH</th>
    <th>EMEL</th>
    {{-- <th>ALAMAT</th> --}}
    <th>KEDATANGAN</th>
    @can('isAdmin')
    <th>TINDAKAN</th>

    @elsecan('isPanel')
    <th>TINDAKAN</th>

    @else
    @endcan
  </tr>
  <tbody>
    @foreach ($ivReg as $ivReg)
  <tr >
    
    <td><ul> {{ $ivReg -> appName}}</ul></td>
    <td><ul> {{ $ivReg -> phoneNo}}</ul></td>
    <td><ul> {{ $ivReg -> date}}</ul></td>
    <td><ul> {{ $ivReg -> email}}</ul></td>
    {{-- <td><ul> {{ $ivReg -> address}}</ul></td> --}}
    <td><ul> {{ $ivReg -> att}}</ul></td>
      @can('isPanel')
      <td>
        <button class=" button btn btn-sm btn-falcon-default" >
          <a style="color: black" href="/ivReg/{{$ivReg->id}}/edit"><i class="fas fa-pen" aria-hidden="true"></i></a></button>
        {{-- <a href="/ivReg/{{$ivReg->id}}/edit">KEMASKINI</a> --}}
  
      </td>
      @elsecan('isAdmin')
    <td>

      <form action="/ivReg/{{ $ivReg -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="s buttonsED ubmit" class="btn btn-sm btn-falcon-default" style="color: black"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
    </td>
    @else
    @endcan

    </tr>
@endforeach
</tbody>
  {{-- @foreach ($ivReg as $ivReg)
  <tr >
    
    <td><ul> {{ $ivReg -> appName}}</ul></td>
    <td><ul> {{ $ivReg -> phoneNo}}</ul></td>
    <td><ul> {{ $ivReg -> date}}</ul></td>
    <td><ul> {{ $ivReg -> email}}</ul></td>
    <td><ul> {{ $ivReg -> address}}</ul></td>
    <td><ul> {{ $ivReg -> att}}</ul></td>
    <td>
      @can('isAdmin')
      <a href="/ivReg/{{$ivReg->id}}/edit">KEMASKINI</a>
      @else
      @endcan
      @can('isAdmin')
      <form action="/ivReg/{{ $ivReg -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i>BUANG</button>
        </form>
      @else
      @endcan

    </td>
    </tr>
@endforeach --}}
</table>

<br>
{{-- <a href="/ivReg/create">Tambah</a> --}}

  </div>
</div>

@endsection
