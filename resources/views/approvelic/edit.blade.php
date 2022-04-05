@extends('base')

@section('content')     

  <form method="POST" action="/approvelic/{{ $approvelic->id }}">
    @method('PUT')
    @csrf    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">KELULUSAN LESEN</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="lesen_id">ID LESEN:</label> <br>
                <input value="{{ $approvelic->lesen_id }}" class="form-control" type="text"  name="lesen_id" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="appName">NAMA:</label> <br>
                <input value="{{ $approvelic->appName }}" class="form-control" type="text"  name="appName" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="date">TARIKH KELULUSAN:</label> <br>
                <input value="{{ $approvelic->date }}" class="form-control datetimepicker" type="date"  name="date" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="status">STATUS BAYARAN:</label> <br>
                <select class="form-select" name="status" >
                  <option value=""></option>
                  <option value="SUDAH BAYAR">SUDAH BAYAR</option>
                  <option value="BELUM DIBAYAR">BELUM DIBAYAR</option>
                </select>

              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

