@extends('base')

@section('content')     

  <form method="POST" action="/gerai/{{ $gerai->id }}">
    @method('PUT')
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">DAFTAR GERAI</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="namaG">NAMA GERAI:</label> <br>
                <input value="{{ $gerai->namaG }}" class="form-control" type="text"  name="namaG" ><br>
              </div>         
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="ownerG">NAMA PEMILIK:</label> <br>
                <input value="{{ $gerai->ownerG }}" class="form-control" type="text"  name="ownerG" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="loc">LOKASI:</label> <br>
                <input value="{{ $gerai->loc }}" class="form-control" type="text"  name="loc" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="rentFee">HARGA SEWA(RM):</label> <br>
                <input value="{{ $gerai->rentFee }}" class="form-control" type="text"  name="rentFee" ><br>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

