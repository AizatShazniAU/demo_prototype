@extends('base')

@section('content')     

  <form method="POST" action="/cerKes/{{ $cerKes->id }}">
    @method('PUT')
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">CERAMAH KESIHATAN</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="speaker">SPEAKER NAMA:</label> <br>
                <input value="{{ $cerKes->speaker }}" class="form-control" type="text"  name="speaker" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="loc">LOKASI:</label> <br>
                <input value="{{ $cerKes->loc }}" class="form-control" type="text"  name="loc" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="date">TARIKH:</label> <br>
                <input value="{{ $cerKes->date }}" class="form-control datetimepicker" type="date"  name="date" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="time">TIME:</label> <br>
                <input value="{{ $cerKes->time }}" class="form-control" type="time"  name="time" ><br>
              </div>

            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

