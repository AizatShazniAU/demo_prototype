
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
  .buttonsED button { 
    width: 50%;
  }
  </style>
@section('content')   

@can('isAdmin')
<div class="row mb-3 g-3">
  <div class="col-xxl-3">
    <div class="card">
      <div class="card-header d-flex flex-between-center py-2 border-bottom">
        <h6 class="mb-0">Kutipan Bil Majlis Perbandaran Pulau Penang</h6>
        <div class="dropdown font-sans-serif btn-reveal-trigger">
          <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-most-leads" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-most-leads"><a class="dropdown-item" href="#!">Lihat</a>{{-- <a class="dropdown-item" href="#!"></a> --}}
            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Kongsi</a>
          </div>
        </div>
      </div>
      <div class="card-body d-flex flex-column justify-content-between">
        <div class="row align-items-center">
          <div class="col-md-5 col-xxl-12 mb-xxl-1">
            <div class="position-relative">
              <div class="echart-most-leads my-2" data-echart-responsive="true"></div>
              <div class="position-absolute top-50 start-50 translate-middle text-center">
                <p class="fs--1 mb-0 text-400 font-sans-serif fw-medium">Jumlah</p>
                <p class="fs-3 mb-0 font-sans-serif fw-medium mt-n2">RM 15.6k</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-12 col-md-7">
            <hr class="mx-ncard mb-0 d-md-none d-xxl-block" />
            <div class="d-flex flex-between-center border-bottom py-3 pt-md-0 pt-xxl-3">
              <div class="d-flex"><img class="me-2" src="../assets/img/crm/email.svg " width="16" height="16" alt="..." />
                <h6 class="text-700 mb-0">Perlesenan</h6>
              </div>
              {{-- <p class="fs--1 text-500 mb-0 fw-semi-bold">5200 vs 1052</p> --}}
              <h6 class="text-700 mb-0">12%</h6>
            </div>
            <div class="d-flex flex-between-center border-bottom py-3">
              <div class="d-flex"><img class="me-2" src="../assets/img/crm/social.svg " width="16" height="16" alt="..." />
                <h6 class="text-700 mb-0">Sewa</h6>
              </div>
              {{-- <p class="fs--1 text-500 mb-0 fw-semi-bold">5623 vs 4929</p> --}}
              <h6 class="text-700 mb-0">25%</h6>
            </div>
            <div class="d-flex flex-between-center border-bottom py-3">
              <div class="d-flex"><img class="me-2" src="../assets/img/crm/call.svg " width="16" height="16" alt="..." />
                <h6 class="text-700 mb-0">Cukai</h6>
              </div>
              {{-- <p class="fs--1 text-500 mb-0 fw-semi-bold">2535 vs 1486</p> --}}
              <h6 class="text-700 mb-0">63%</h6>
            </div>
            <div class="d-flex flex-between-center border-bottom py-3 border-bottom-0 pb-0">
              <div class="d-flex"><img class="me-2" src="../assets/img/crm/other.svg " width="16" height="16" alt="..." />
                <h6 class="text-700 mb-0">Kompaun</h6>
              </div>
              {{-- <p class="fs--1 text-500 mb-0 fw-semi-bold">256 vs 189</p> --}}
              <h6 class="text-700 mb-0">53%</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!">Lihat Penuh<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
    </div>
  </div>
  <div class="col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex flex-between-center border-bottom py-2">
        <h6 class="mb-0">Bil Yang Dibayar</h6><a class="btn btn-link btn-sm px-0 shadow-none" href="#!">Lihat Teperinci<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
      </div>
      <div class="card-body">
        <div class="row rtl-row-reverse g-1">
          <div class="col">
            <div class="d-flex flex-between-center rtl-row-reverse">
              <h6 class="fs--2 text-500">Jenis</h6>
              <h6 class="fs--2 text-500">Peratus Pembayar</h6>
            </div>
          </div>
          <div class="col-auto">
            <h6 class="fs--2 text-500">Bil</h6>
          </div>
        </div>
        <div class="echart-deal-storage-funnel" data-echart-responsive="true" data-options='{"data":[7,10,13,26,19],"dataAxis1":["Lain-lain","Kompaun","Perlesenan","Cukai","Perlesenan"],"dataAxis2":["50%","70%","76%","68%","99%"]}'></div>
      </div>
    </div>
  </div>
</div>
@else
@endcan




<div class="card mb-3 overflow-hidden">
  <div class="card-header">
    <br>
    <div class="row align-items-center">
      <div class="col">
        <h4 class="mb-0">SENARAI BIL</h4>
      </div>
      <div class="col-auto text-center pe-card">
        <button class="btn btn-secondary me-1 mb-1"><a style="color: black" href="/bill/create"><i class="fa fa-plus-square"></i>Tambah</a></button>
      </div>
    </div>
  </div>  

<br>


<table class=" buttonsED table table-striped border-bottom" style="text-align: center">
  <tr>
    <th>NAMA</th>
    <th>TARIKH BAYARAN</th>
    <th>STATUS</th>
    @can('isAdmin')
    <th>TINDAKAN</th>
    @else
    @endcan
  </tr>
  @foreach ($bill as $bill)
  <tr >
    
    <td><ul> {{ $bill -> payee}}</ul></td>
    <td><ul> {{ $bill -> date}}</ul></td>
    <td><ul> {{ $bill -> status}}</ul></td>
      @can('isAdmin')
    <td>
      <button class="buttonsED btn btn-sm btn-falcon-default" >
        <a style="color: black" href="/bill/{{$bill->id}}/edit"><i class="fas fa-pen" aria-hidden="true"></i></a></button>
      <br>

      {{-- <a href="/bill/{{$bill->id}}/edit">KEMASKINI</a> --}}
      <form action="/bill/{{ $bill -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="buttonsED btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
    </td>
    @else
    @endcan
    </tr>
@endforeach
</table>
</div>
<br>

@endsection
