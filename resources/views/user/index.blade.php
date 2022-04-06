
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
  <div class="col-lg-12">
    <div class="card mb-3">
      <div class="card-header d-flex flex-between-center bg-light py-2">
        <h6 class="mb-0">Penguna Majlis</h6>
        <div class="dropdown font-sans-serif btn-reveal-trigger">
          <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-active-user-report" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user-report"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-auto mt-md-0">
            <div class="row flex-md-column justify-content-between h-md-100 ms-0">
              <div class="col border-end border-md-end-0 border-md-bottom pt-3">
                <h5 class="fs--2 text-700"><span class="fas fa-circle text-primary me-2"></span>Mobil</h5>
                <h5 class="text-700 fs-0">10,325</h5>
              </div>
              <div class="col border-end border-md-end-0 border-md-bottom pt-3 pt-md-4">
                <h5 class="fs--2 text-700"><span class="fas fa-circle text-success me-2"></span>Tablet</h5>
                <h5 class="text-700 fs-0">4,235</h5>
              </div>
              <div class="col pt-3 pt-md-4">
                <h5 class="fs--2 text-700"><span class="fas fa-circle text-info me-2"></span>PC</h5>
                <h5 class="text-700 fs-0">3,575</h5>
              </div>
            </div>
          </div>
          <div class="col-md-auto echart-active-users-report-container">
            <div class="echart-active-users-report h-100" data-echart-responsive="true"></div>
          </div>
        </div>
      </div>
      <div class="card-footer bg-light py-2">
        <div class="row flex-between-center g-0">
          <div class="col-auto">
            <select class="form-select form-select-sm audience-select-menu">
              <option value="week" selected="selected">Minggu Lalu</option>
              <option value="month">Bulan Lepas</option>
              <option value="year">Tahun Lepas</option>
            </select>
          </div>
          <div class="col-auto">
            <h6 class="mb-0"><a class="py-2" href="#!">Lihat semua pengguna<span class="fas fa-chevron-right ms-1 fs--2"></span></a></h6>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="card">
      <div class="card-body py-5 py-sm-3">
        <div class="row g-5 g-sm-0">
          <div class="col-sm-4">
            <div class="border-sm-end border-300">
              <div class="text-center">
                <h6 class="text-700">Pembaikan Dilakukan 2021</h6>
                <h3 class="fw-normal text-700">1727</h3>
              </div>
              <div class="echart-goal-charts" data-echart-responsive="true" data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[172,129,123,158,196,106,187,198,152,175,178,165,188,139,115,131,143,140,112,167,180,156,121,190,100],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"16px","left":"0","bottom":"0","top":"0"}}'></div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="border-sm-end border-300">
              <div class="text-center">
                <h6 class="text-700">Kos Pembaikan 2021</h6>
                <h3 class="fw-normal text-700">RM4.2J</h3>
              </div>
              <div class="echart-goal-charts" data-echart-responsive="true" data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[170,156,171,193,108,178,163,175,117,123,174,199,122,111,113,140,192,167,186,172,131,187,135,115,118],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"16px","left":"16px","bottom":"0","top":"0"}}'></div>
            </div>
          </div>
          <div class="col-sm-4">
            <div>
              <div class="text-center">
                <h6 class="text-700">Kadar Kerja Selesai 2021</h6>
                <h3 class="fw-normal text-700">39.67%</h3>
              </div>
              <div class="echart-goal-charts" data-echart-responsive="true" data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[199,181,155,164,108,158,117,148,121,152,189,116,111,130,113,171,193,104,110,153,190,162,180,114,183],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"0","left":"16px","bottom":"0","top":"0"}}'></div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</div>
  <div class="card mb-3 overflow-hidden">
    <div class="card-header">
      <div class="row gx-0 align-items-center"></div>
      <br>
      <div class="row align-items-center">
        <div class="col">
          <h4 class="mb-0">USER LIST</h4>
        </div>
        <div class="col-auto text-center pe-card">
          {{-- <button class="btn btn-secondary me-1 mb-1"><a style="color: black" href="/user/create"><i class="fa fa-plus-square"></i>Tambah</a></button> --}}
        </div>
      </div>
    </div>
      <div>
        <h2></h2>
      </div>          



          <table class="buttonsED table table-striped border-bottom" style="text-align: center">
          <thead>
            <tr>
              <th>NAMA</th>
              <th>EMAIL</th>
              <th>ROLE</th>
              <th>TINDAKAN</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $user)
            <tr >
              
              <td style="text-align: center" ><ul> {{ $user -> name}}</ul></td>
              <td style="text-align: center" ><ul> {{ $user -> email}}</ul></td>
              <td style="text-align: center" ><ul> {{ $user -> role}}</ul></td>

              <td style="text-align: center" >
                <button class="buttonsED btn btn-sm btn-falcon-default" ><a style="color: black" href="/user/{{$user->id}}/edit"><i class="fas fa-pen" aria-hidden="true"></i></a></button>
                
                <form action="/user/{{ $user -> id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" style="color: black" class=" buttonsED btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
              </td>
              </tr>
          @endforeach
          </tbody>
          </table>

          <br>
      </div>
    </div>
  </div>

@endsection
