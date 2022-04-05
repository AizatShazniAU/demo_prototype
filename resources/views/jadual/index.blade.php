
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
@section('content')   
<div class="row">
  {{-- <div class="col-xxl-6 col-lg-12">
    <div class="card h-100">
      <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-3.png);">
      </div>
      <!--/.bg-holder-->

      <div class="card-header z-index-1">
        <h5 class="text-primary">Welcome to Falcon! </h5>
        <h6 class="text-600">Here are some quick links for you to start </h6>
      </div>
      <div class="card-body z-index-1">
        <div class="row g-2 h-100 align-items-end">
          <div class="col-sm-6 col-md-5">
            <div class="d-flex position-relative">
              <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span class="fas fa-chess-rook text-primary"></span></div>
              <div class="flex-1"><a class="stretched-link" href="#!">
                  <h6 class="text-800 mb-0">General</h6>
                </a>
                <p class="mb-0 fs--2 text-500">Customize with a few clicks</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5">
            <div class="d-flex position-relative">
              <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span class="fas fa-crown text-warning"></span></div>
              <div class="flex-1"><a class="stretched-link" href="#!">
                  <h6 class="text-800 mb-0">Upgrade to pro</h6>
                </a>
                <p class="mb-0 fs--2 text-500">Try Pro for 14 days free! </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5">
            <div class="d-flex position-relative">
              <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span class="fas fa-video text-success"></span></div>
              <div class="flex-1"><a class="stretched-link" href="#!">
                  <h6 class="text-800 mb-0">Create a meeting</h6>
                </a>
                <p class="mb-0 fs--2 text-500">Manage and update your meetings</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5">
            <div class="d-flex position-relative">
              <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span class="fas fa-user text-info"></span></div>
              <div class="flex-1"><a class="stretched-link" href="#!">
                  <h6 class="text-800 mb-0">Members activity</h6>
                </a>
                <p class="mb-0 fs--2 text-500">Monitor activity and supervise</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="col-xxl-3 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex flex-between-center">
        <h5 class="mb-0">Kemajuan Kerja</h5><a class="btn btn-link btn-sm px-0" href="#!">Report<span class="fas fa-chevron-right ms-1 fs--2"> </span></a>
      </div>
      <div class="card-body">
        <p class="fs--1 text-600">Peratusan Kerja siap bergantung kepada, <br />jumlah kertas kerja yang disiapkan</p>
        <div class="progress mb-3 rounded-pill" style="height: 6px;">
          <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar" style="width: 75%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="mb-0 text-primary">75% Selesai</p>
        <p class="mb-0 fs--2 text-500">Jan 1 hingga 30</p>
      </div>
    </div>
  </div>
  <div class="col-xxl-3 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col">
            <p class="mb-1 fs--2 text-500">Tugas Masa Datang</p>
            <h5 class="text-primary fs-0">Mesyuarat Hari Ini</h5>
          </div>
          <div class="col-auto">
            <div class="bg-soft-primary px-3 py-3 rounded-circle text-center" style="width:60px;height:60px;">
              <h5 class="text-primary mb-0 d-flex flex-column mt-n1"><span>27</span><small class="text-primary fs--2 lh-1">JAN</small></h5>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body d-flex align-items-end">
        <div class="row g-3 justify-content-between">
          <div class="col-10 mt-0">
            <p class="fs--1 text-600 mb-0">Perbincangan penambahbaikan Menara KOMTAR</p>
          </div>
          <div class="col-auto">
            <button class="btn btn-success w-100 fs--1" type="button"><span class="fas fa-video me-2"></span>Sertai Mesyuarat</button>
          </div>
          <div class="col-auto ps-0">
            <div class="avatar-group avatar-group-dense">
              <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />

              </div>
              <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />

              </div>
              <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />

              </div>
              <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                <div class="avatar-name rounded-circle "><span>+30</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<br>
<h2>JADUAL MESYUARAT</h2>

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
{{-- <div class="card mb-3 overflow-hidden">
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
        <button class="btn btn-falcon-primary btn-sm" type="button" data-event="today">Today</button>
      </div>
      <div class="col-md-auto d-md-none">
        <hr />
      </div>
      <div class="col-auto d-flex order-md-0">
        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>Add Schedule</button>
      </div>
      <div class="col d-flex justify-content-end order-md-2">
        <div class="dropdown font-sans-serif me-md-2">
          <button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none" type="button" id="email-filter" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span data-view-title="data-view-title">Month View</span><span class="fas fa-sort ms-2 fs--1"></span></button>
          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-filter"><a class="active dropdown-item d-flex justify-content-between" href="#!" data-fc-view="dayGridMonth">Month View<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="timeGridWeek">Week View<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="timeGridDay">Day View<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="listWeek">List View<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="listYear">Year View<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body p-0">
    <div class="calendar-outline" id="appCalendar"></div>
  </div>
</div> --}}
{{-- 
<table class="table table-striped border-bottom" style="text-align: center">
  <tr>
    <th>NAMA</th>
    <th>TARIKH</th>
    <th>MASA</th>
    <th>LOKASI</th>
    <th>TINDAKAN</th>
  </tr>
  @foreach ($jadual as $jadual)
  <tr >
    
    <td><ul> {{ $jadual -> lesen_id}}</ul></td>
    <td><ul> {{ $jadual -> date}}</ul></td>
    <td><ul> {{ $jadual -> time}}</ul></td>
    <td><ul> {{ $jadual -> loc}}</ul></td>
    <td><a href="/jadual/{{$jadual->id}}/edit">KEMASKINI</a>
      <form action="/jadual/{{ $jadual -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i>BUANG</button>
        </form>
    </td>
    </tr>
@endforeach
</table> --}}

<br>
{{-- <a href="/jadual/create">Tambah</a> --}}

@endsection
