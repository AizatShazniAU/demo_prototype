@extends('base')

@section('content')     

  <form method="POST" action="/sCCD/{{ $sCCD->id }}">
    @method('PUT')
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">SEMAKAN CCD</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-12 mb-3">
                <label for="status">SEMAKAN STATUS:</label> <br>
                <select  class="form-select" id="status" name="status">
                  <option selected value="{{ $sCCD->status }}">{{ $sCCD->status }}</option>
                  <option value="1">LULUS</option>
                  <option value="2">GAGAL</option>
                </select>
              </div>
              <div class="col-sm-12 mb-3">
                <label class="form-label" for="ccd_id">CCD ID:</label> <br>
                <input value="{{ $sCCD->ccd_id }}" class="form-control" type="text"  name="ccd_id" ><br>
              </div>
              <div class="col-sm-12 mb-3">
                <label class="form-label" for="date">TARIKH:</label> <br>
                <input value="{{ $sCCD->date }}" class="form-control datetimepicker" type="date"  name="date" ><br>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

