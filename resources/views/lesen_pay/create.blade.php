@extends('base')

@section('content')     

  <form method="POST" action="/lesen_pay/">
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">PEMBAYARAN LESEN</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="lesen_id">ID LESEN:</label> <br>
                <input class="form-control" type="text"  name="lesen_id" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="lesenFee">YURAN LESEN (RM):</label> <br>
                <input class="form-control" type="number" min="0" name="lesenFee" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="payMet">CARA BAYARAN:</label> <br>
                <select class="form-select" name="payMet" >
                <option value=""></option>
                <option value="TALIAN">TALIAN</option>
                <option value="KAD">KAD</option>
                <option value="TUNAI">TUNAI</option>
              </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="status">STATUS BAYARAN:</label> <br>
                <select class="form-select" name="status" >
                <option value=""></option>
                <option value="SELESAI">SELESAI</option>
                <option value="BELUM">BELUM</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="date">TARIKH BAYARAN:</label> <br>
                <input class="form-control datetimepicker" type="date"  name="date" ><br>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

