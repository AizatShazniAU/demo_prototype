
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
<div class="row g-3 mb-3">
  <div class="col-xxl-6 col-xl-12">
    <div class="row g-3">
      <div class="col-12">
        <div class="card bg-transparent-50 overflow-hidden">
          {{-- <div class="card-header position-relative">
            <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;">
            </div>
            <!--/.bg-holder-->

            <div class="position-relative z-index-2">
              <div>
                <h3 class="text-primary mb-1">Good Afternoon, Jonathan!</h3>
                <p>Here’s what happening with your store today </p>
              </div>
              <div class="d-flex py-3">
                <div class="pe-3">
                  <p class="text-600 fs--1 fw-medium">Today's visit </p>
                  <h4 class="text-800 mb-0">14,209</h4>
                </div>
                <div class="ps-3">
                  <p class="text-600 fs--1">Today’s total sales </p>
                  <h4 class="text-800 mb-0">$21,349.29 </h4>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="card-body p-0">
            <ul class="mb-0 list-unstyled">
              <li class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
                <div class="row flex-between-center">
                  <div class="col">
                    <div class="d-flex">
                      <div class="fas fa-circle mt-1 fs--2"></div>
                      <p class="fs--1 ps-2 mb-0"><strong>5 products</strong> didn’t publish to your Facebook page</p>
                    </div>
                  </div>
                  <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View products<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                </div>
              </li>
              <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                <div class="row flex-between-center">
                  <div class="col">
                    <div class="d-flex">
                      <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                      <p class="fs--1 ps-2 mb-0"><strong>7 orders</strong> have payments that need to be captured</p>
                    </div>
                  </div>
                  <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View payments<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                </div>
              </li>
              <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                <div class="row flex-between-center">
                  <div class="col">
                    <div class="d-flex">
                      <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                      <p class="fs--1 ps-2 mb-0"><strong>50+ orders</strong> need to be fulfilled</p>
                    </div>
                  </div>
                  <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View orders<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                </div>
              </li>
            </ul>
          </div> --}}
        </div>
      </div>
      <div class="col-lg-12">
        <div class="row g-3">
          <div class="col-md-6">
            <div class="card h-md-100 ecommerce-card-min-width">
              <div class="card-header pb-0">
                <h6 class="mb-0 mt-2 d-flex align-items-center">KELULUSAN LESEN <span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
              </div>
              <div class="card-body d-flex flex-column justify-content-end">
                <div class="row">
                  <div class="col">
                    <p class="font-sans-serif lh-1 mb-1 fs-2" id="tambah1">
                    </p><span class="badge badge-soft-success rounded-pill fs--2">+3.5%  minggu lepas</span>
                  </div>
                  <div class="col-auto ps-0">
                    <div class="echart-bar-weekly-sales h-100 echart-bar-weekly-sales-smaller-width"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h6 class="mb-0 mt-2 d-flex align-items-center">Jumlah Pembayar Lesen</h6>
              </div>
              <div class="card-body">
                <div class="row align-items-end">
                  <div class="col">
                    <p class="font-sans-serif lh-1 mb-1 fs-2" id="tambah"></p>
                    <div class="badge badge-soft-primary rounded-pill fs--2"><span class="fas fa-caret-down me-1"></span>13.6%  bulan lepas</div>
                  </div>
                  <div class="col-auto ps-0">
                    <div class="total-order-ecommerce" data-echarts='{"series":[{"type":"line","data":[110,100,250,210,530,480,320,325]}],"grid":{"bottom":"-10px"}}'></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card h-md-100 h-100">
              <div class="card-body">
                <div class="row h-100 justify-content-between g-0">
                  <div class="col-5 col-sm-6 col-xxl pe-2">
                    <h6 class="mt-1">Permohonan Lesen Jualan</h6>
                    <div class="fs--2 mt-3">
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-primary"></span>
                          <span class="fw-semi-bold">PASAR MALAM</span></div>
                        <div class="d-xxl-none" id="tambah4"></div>
                      </div>
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-info"></span>
                          <span class="fw-semi-bold">PASAR PAGI</span></div>
                        <div class="d-xxl-none" id="tambah5"></div>
                      </div>
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-warning"></span>
                          <span class="fw-semi-bold">PENJAJA</span></div>
                        <div class="d-xxl-none" id="tambah6"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto position-relative">
                    <div class="echart-product-share"></div>
                    <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">
                      <p id="tambah2"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-body">
                <div class="row h-100 justify-content-between g-0">
                  <div class="col-5 col-sm-6 col-xxl pe-2">
                    <h6 class="mt-1">Permohonan Lesen Bertempoh</h6>
                    <div class="fs--2 mt-3">
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-primary"></span>
                          <span class="fw-semi-bold">BERMUSIM</span></div>
                        <div class="d-xxl-none" id="tambah7"></div>
                      </div>
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-info"></span>
                          <span class="fw-semi-bold">SEMENTARA</span></div>
                        <div class="d-xxl-none" id="tambah8"></div>
                      </div>
                      <div class="d-flex flex-between-center mb-1">
                        <div class="d-flex align-items-center"><span class="dot bg-300"></span>
                          <span class="fw-semi-bold">TETAP</span></div>
                        <div class="d-xxl-none" id="tambah9"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto position-relative">
                    <div class="echart-market-share"></div>
                    <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">
                      <p id="tambah3"></p>
                    </div>
                  </div>
                </div>
              </div>
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
          <h4 class="mb-0">SENARAI PERMOHONAN LESEN</h4>
        </div>
        <div class="col-auto text-center pe-card">
          <button class="btn btn-secondary me-1 mb-1"><a style="color: black" href="/lesen/create"><i class="fa fa-plus-square"></i>Tambah</a></button>
        </div>
      </div>
    </div>

    <table class="buttons table table-striped border-bottom" style="text-align: center">
      <thead>
        <tr>
          <th>NAMA</th>
          {{-- <th>NAMA SYARIKAT</th> --}}
          <th>LESEN</th>
          <th>PERNIAGAAN</th>
          <th>STATUS</th>
          <th>TINDAKAN</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($lesen as $lesen)
        <tr >
          
          <td style="text-align: center"><ul> {{ $lesen -> appName}}</ul></td>
          {{-- <td style="text-align: center" ><ul> {{ $lesen -> busName}}</ul></td> --}}
          <td style="text-align: center" ><ul> {{ $lesen -> licType}}</ul></td>
          <td style="text-align: center" ><ul> {{ $lesen -> appType}}</ul></td>
          <td style="text-align: center" ><ul> {{ $lesen -> status}}</ul></td>
          {{-- <td style="text-align: center" ><ul> {{ $lesen -> status}}</ul></td> --}}
          <td style="text-align: center" >
                <button class="buttonsED btn btn-sm btn-falcon-default" ><a style="color: black" href="/lesen/{{$lesen->id}}/edit"><i class="fas fa-pen" aria-hidden="true"></i></a></button>
                <br>
                <form action="/lesen/{{ $lesen -> id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="buttonsED btn btn-sm btn-falcon-default"><i style="color: black" class="fa fa-trash" aria-hidden="true"></i></button>
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
</div>
  


<script type="text/javascript">
  let x = 130 + {{ $lesen13 }};
  document.getElementById("tambah").innerHTML = x;
  let y = 130 + {{ $lesen10 }};
  document.getElementById("tambah1").innerHTML = y;
  let z = 130 + {{ $lesen4 }};
  document.getElementById("tambah2").innerHTML = z;
  let a = 130 + {{ $lesen4 }};
  document.getElementById("tambah3").innerHTML = a;
  let b = 40 + {{ $lesen1 }};
  document.getElementById("tambah4").innerHTML = b;
  let c = 60 + {{ $lesen2 }};
  document.getElementById("tambah5").innerHTML = c;
  let d = 30 + {{ $lesen3 }};
  document.getElementById("tambah6").innerHTML = d;
  let e = 60 + {{ $lesen5 }};
  document.getElementById("tambah7").innerHTML = e;
  let f = 30 + {{ $lesen6 }};
  document.getElementById("tambah8").innerHTML = f;
  let g = 40 + {{ $lesen7 }};
  document.getElementById("tambah9").innerHTML = g;

  </script>
@endsection
