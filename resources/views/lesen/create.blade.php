@extends('base')

@section('content')     

  <form method="POST" action="/lesen/" enctype="multipart/form-data">
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">PERMOHONAN LESEN</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              {{-- <div class="col-sm-6 mb-3">
                <label class="form-label" for="regNo">NAMA:</label> <br>
                <input class="form-control" type="text"  name="regNo" ><br>
              </div> --}}
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="appName">NAMA PENDAFTAR:</label> <br>
                <input class="form-control" type="text"  name="appName" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="busName">NAMA SYARIKAT:</label> <br>
                <input class="form-control" type="text"  name="busName" ><br>
              </div>

              {{-- <div class="col-sm-6 mb-3">
                <label class="form-label" for="licName">NAMA LESEN:</label> <br>
                <input class="form-control" type="text"  name="licName" ><br>
                <select class="form-select" name="licName" ></select>
                <option value="PERNIAGAAN">PERNIAGAAN</option>
                <option value="BELUM DIBAYAR">BELUM DIBAYAR</option>
              </div> --}}
              {{-- <div class="col-sm-6 mb-3">
                <label class="form-label" for="status">STATUS:</label> <br>
                <input class="form-control" type="text"  name="status" ><br>
              </div>             --}}
              {{-- <div class="col-sm-6 mb-3">
                <label class="form-label" for="agency">NAMA AGENSI:</label> <br>
                <input class="form-control" type="text"  name="agency" ><br>
              </div> --}}
              
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="licType">JENIS LESEN:</label> <br>
                <select class="form-select" name="licType" >
                  <option value=""></option>
                  <option value="BERMUSIM">BERMUSIM</option>
                  <option value="SEMENTARA">SEMENTARA</option>
                  <option value="TETAP">TETAP</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="appType">JENIS PERNIAGAAN:</label> <br>
                <select class="form-select" name="appType" >
                  <option value=""></option>
                  <option value="PASAR MALAM">PASAR MALAM</option>
                  <option value="PASAR PAGI">PASAR PAGI</option>
                  <option value="PENJAJA">PENJAJA</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="status">STATUS:</label> <br>
                <select class="form-select" name="status" >
                  <option value=""></option>
                  <option value="DITOLAK">DITOLAK</option>
                  <option value="LULUS">LULUS</option>
                </select>
              </div>
              {{-- <div class="col-sm-6 mb-3">
                <label class="form-label" for="attach">ATTACHMENT:</label> <br>
                <input class="form-control" type="file"  name="attach" ><br>
              </div> --}}
              <div class="col-sm-6 mb-3">
                {{-- <label class="form-label" for="user_id">USER ID: </label> <br> --}}
                <input class="form-control" hidden type="text" value="{{Auth()->user()->id}}" readonly name="user_id" ><br>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

