@extends('base')

@section('content')     

  <form method="POST" action="/bill/{{ $bill->id }}">
    @method('PUT')
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">AKAUN BIL</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="payee">NAMA PEMBAYAR:</label> <br>
                <input value="{{ $bill->payee }}" class="form-control" type="text"  name="payee" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="typeBill">JENIS BIL:</label> <br>
                <select class="form-select" name="typeBill" id="">
                  <option selected value="{{ $bill->typeBill }}">{{ $bill->typeBill }}</option>
                  <option value="KOMPAUN">KOMPAUN</option>
                  <option value="CUKAI">CUKAI</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="date">TARIKH BAYARAN:</label> <br>
                <input value="{{ $bill->date }}" class="form-control datetimepicker" type="date"  name="date" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="total">JUMLAH BIL:</label> <br>
                <input value="{{ $bill->total }}" class="form-control" type="number"  min="0" name="total" ><br>
              </div>
              <div class="col-sm-12 mb-3">
                <label class="form-label" for="detail">KETERANGAN BIL:</label> <br>
                <textarea class="form-control" type="text"  name="detail" >{{ $bill->detail }}</textarea><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="status">STATUS BAYARAN:</label> <br>
                <select class="form-select" name="status" id="">
                  <option selected value="{{ $bill->status }}">{{ $bill->status }}</option>
                  <option value="SUDAH DIBAYAR">SUDAH DIBAYAR</option>
                  <option value="BELUM DIBAYAR">BELUM DIBAYAR</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="payMethod">KAEDAH BAYARAN:</label> <br>
                <select class="form-select" name="payMethod" >
                  <option selected value="{{ $bill->payMethod }}">{{ $bill->payMethod }}</option>
                  <option value="KAD">KAD</option>
                  <option value="TUNAI">TUNAI</option>
                </select>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

