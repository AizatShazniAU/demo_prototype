@extends('base')

@section('content')     

  <form method="POST" action="/inRec/{{ $inRec->id }}">
    @method('PUT')
    @csrf    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">REKOD SUNTIKAN</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="staffName">NAMA:</label> <br>
                <input value="{{ $inRec->staffName }}" class="form-control" type="text"  name="staffName" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="icNo">NO IC:</label> <br>
                <input value="{{ $inRec->icNo }}" class="form-control" type="number"  min="0" name="icNo" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="date">TARIKH:</label> <br>
                <input value="{{ $inRec->date }}" class="form-control datetimepicker" type="date"  name="date" ><br>
              </div>

              <div class="col-sm-6 mb-3">
                <label class="form-label" for="loc">LOKASI:</label> <br>
                <input value="{{ $inRec->loc }}" class="form-control" type="text"  name="loc" ><br>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

