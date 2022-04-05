@extends('base')

@section('content')     

  <form method="POST" action="/laporan/{{ $laporan->id }}">
    @method('PUT')
    @csrf
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">LAPORAN</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              <div class="col-sm-6 mb-3">
              <label class="form-label" for="title">MASALAH:</label> <br>
              <input value="{{ $laporan->title }}" class="form-control" type="text"  name="title" ><br>
            </div>
            <div class="col-sm-6 mb-3">
              <label class="form-label" for="date">TARIKH LAPORAN:</label> <br>
              <input value="{{ $laporan->date }}" readonly class="form-control " type="date"  name="date" ><br>
            </div>
            <div class="col-sm-6   mb-3">
              <label class="form-label" for="reportBy">NAMA PELAPOR:</label> <br>
              <input value="{{ $laporan->reportBy }}" class="form-control" type="text"  name="reportBy" ><br>
            </div>
            <div class="col-sm-6 mb-3">
              <label class="form-label" for="reportType">JENIS LAPORAN:</label> <br>
              <select class="form-select" name="reportType">
                <option value="{{ $laporan->reportType }}">{{ $laporan->reportType }}</option>
                <option value="KEROSAKAN">KEROSAKAN</option>
                <option value="ADUAN">ADUAN</option>
              </select>
            </div>

            <div class="col-sm-6 mb-3">
              <label class="form-label" for="cat">KATEGORI:</label> <br>
              <select class="form-select" name="cat">
                <option value="{{ $laporan->cat }}">{{ $laporan->cat }}</option>
                <option value="JALAN RAYA">JALAN RAYA</option>
                <option value="ELEKTRIK">ELEKTRIK</option>
                <option value="STAFF">STAFF</option>
              </select>
            </div>
            <div class="col-sm-6 mb-3">
              <label class="form-label" for="status">STATUS:</label> <br>
              <select class="form-select" name="status">
                <option value="{{ $laporan->status }}">{{ $laporan->status }}</option>
                <option value="DITERIMA">TERIMA</option>
                <option value="SELESAI">SELESAI</option>
              </select>
            </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

