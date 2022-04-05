
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



@can('isAdmin')
<div class="row mb-3 g-3">
  <div class="col-lg-12 col-xxl-9">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4 border-lg-end border-bottom border-lg-0 pb-3 pb-lg-0">
            <div class="d-flex flex-between-center mb-3">
              <div class="d-flex align-items-center">
                <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span class="fs--2 fas fa-phone text-primary"></span></div>
                <h6 class="mb-0">Permohonan Baru</h6>
              </div>
              {{-- <div class="dropdown font-sans-serif btn-reveal-trigger">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-new-contact" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-contact"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                </div>
              </div> --}}
            </div>
            <div class="d-flex">
              <div class="d-flex">
                <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">15%</p>
                <div class="d-flex flex-column"> <span class="me-1 text-success fas fa-caret-up text-primary"></span>
                  <p class="fs--2 mb-0 text-nowrap">2500 vs 2683 </p>
                </div>
              </div>
              <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[220,230,150,175,200,170,70,160],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'></div>
            </div>
          </div>
          <div class="col-lg-4 border-lg-end border-bottom border-lg-0 py-3 py-lg-0">
            <div class="d-flex flex-between-center mb-3">
              <div class="d-flex align-items-center">
                <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-info"><span class="fs--2 fas fa-user text-info"></span></div>
                <h6 class="mb-0">Pelanjutan Lesen</h6>
              </div>
              {{-- <div class="dropdown font-sans-serif btn-reveal-trigger">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-new-users" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-users"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                </div>
              </div> --}}
            </div>
            <div class="d-flex">
              <div class="d-flex">
                <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">13%</p>
                <div class="d-flex flex-column"> <span class="me-1 text-success fas fa-caret-up text-success"></span>
                  <p class="fs--2 mb-0 text-nowrap">1635 vs 863 </p>
                </div>
              </div>
              <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[90,160,150,120,230,155,220,240],"color":"#27bcfd","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#27bcfd3A"},{"offset":1,"color":"#27bcfd0A"}]}}}],"grid":{"bottom":"-10px"}}'></div>
            </div>
          </div>
          <div class="col-lg-4 pt-3 pt-lg-0">
            <div class="d-flex flex-between-center mb-3">
              <div class="d-flex align-items-center">
                <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-success"><span class="fs--2 fas fa-bolt text-success"></span></div>
                <h6 class="mb-0">Tapak Ditutup</h6>
              </div>
              {{-- <div class="dropdown font-sans-serif btn-reveal-trigger">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-new-leads" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-leads"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                </div>
              </div> --}}
            </div>
            <div class="d-flex">
              <div class="d-flex">
                <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">46%</p>
                <div class="d-flex flex-column"> <span class="me-1 text-success fas fa-caret-down text-danger"></span>
                  <p class="fs--2 mb-0 text-nowrap">423 vs 256 </p>
                </div>
              </div>
              {{-- <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[200,150,175,130,150,115,130,100],"color":"#00d27a","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#00d27a3A"},{"offset":1,"color":"#00d27a0A"}]}}}],"grid":{"bottom":"-10px"}}'></div> --}}
            </div>
          </div>
        </div>
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
        <h4 class="mb-0">SENARAI PERMOHONAN GERAI</h4>
      </div>
      <div class="col-auto text-center pe-card">
        <button class="btn btn-secondary me-1 mb-1"><a style="color: black" href="/gerai/create"><i class="fa fa-plus-square"></i>Tambah</a></button>
      </div>
    </div>
  </div>
  <table class="buttonsED table table-striped border-bottom" style="text-align: center">
    <tr>
      <th>NAMA GERAI</th>
      <th>NAMA PEMILIK</th>
      <th>LOKASI</th>
      <th>TINDAKAN</th>
    </tr>
    @foreach ($gerai as $gerai)
    <tr >
      
      <td><ul> {{ $gerai -> namaG}}</ul></td>
      <td><ul> {{ $gerai -> ownerG}}</ul></td>
      <td><ul> {{ $gerai -> rentFee}}</ul></td>
      <td>
        <button class="buttonsED btn btn-sm btn-falcon-default" ><a style="color: black" href="/gerai/{{$gerai->id}}/edit"><i class="fas fa-pen" aria-hidden="true"></i></a></button>
        <form action="/gerai/{{ $gerai -> id }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="buttonsED btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i></button>
          </form>
      </td>
      </tr>
  @endforeach
  </table>
</div>


@endsection
