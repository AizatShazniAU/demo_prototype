@extends('base')

@section('content')     

  <form method="POST" action="/ivReg/" enctype="multipart/form-data">
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">DAFTAR TEMUDUGA </h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="appName">NAMA:</label> <br>
                <input class="form-control" type="text"  name="appName" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="date">TARIKH TEMUDUGA:</label> <br>
                <input class="form-control datetimepicker" type="date"  name="date" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="phoneNo">PHONE NO:</label> <br>
                <input class="form-control" type="number" min="0"  name="phoneNo" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="email">EMEL:</label> <br>
                <input class="form-control" type="email"  name="email" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="address">ALAMAT:</label> <br>
                <input class="form-control" type="text"  name="address" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="att">KEDATANGAN:</label> <br>
                <select class="form-select" name="att">
                  <option value="" ></option>
                  <option value="DATANG">DATANG</option>
                  <option value="TIDAK DATANG">TIDAK DATANG</option>
                </select>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" onclick="clicked(event)" class="btn btn-primary">Hantar</button>
  </form>

  <script>
    function clicked(e)
{
    if(!confirm('Anda pasti?')) {
        e.preventDefault();
    }
}
  </script>
@endsection

