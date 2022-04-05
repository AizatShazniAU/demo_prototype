@extends('base')

@section('content')     

  <form method="POST" action="/jadual/{{ $jadual->id }}">
    @method('PUT')
    @csrf    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">PENJADUALAN MESYUARAT</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="lesen_id">ID LESEN:</label> <br>
                <input value="{{ $jadual->lesen_id }}" class="form-control" type="text"  name="lesen_id" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="title">TAJUK:</label> <br>
                <input value="{{ $jadual->title }}" class="form-control" type="text"  name="title" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="date">TARIKH:</label> <br>
                <input value="{{ $jadual->date }}" class="form-control datetimepicker" type="date"  name="date" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="time">MASA:</label> <br>
                <input value="{{ $jadual->time }}" class="form-control " type="time"  name="time" ><br>
              </div>
              <div class="col-sm-12 mb-3">
                <label class="form-label" for="loc">LOKASI:</label> <br>
                <input value="{{ $jadual->loc }}" class="form-control" type="text"  name="loc" ><br>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

