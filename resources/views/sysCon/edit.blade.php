@extends('base')

@section('content')     

  <form method="POST" action="/sysCon/{{ $sysCon->id }}">
    @method('PUT')
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">SYSTEM CONFIGURATION</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="conType">JENIS KONFIGURASI:</label> <br>
                <input value="{{ $sysCon->conType }}" class="form-control" type="text"  name="conType" ><br>
              </div>         
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="codeApp">KOD APPLIKASI:</label> <br>
                <input value="{{ $sysCon->codeApp }}" class="form-control" type="text"  name="codeApp" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="linCh">CAS PERLESENAN:</label> <br>
                <input value="{{ $sysCon->linCh }}" class="form-control" type="number" min="0"  name="linCh" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="userAcc">AKAUN PENGGUNA:</label> <br>
                <input value="{{ $sysCon->userAcc }}" class="form-control" type="text"  name="userAcc" ><br>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

