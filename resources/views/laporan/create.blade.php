@extends('base')

@section('content')     

  <form method="POST" action="/laporan/">
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
                <input class="form-control" type="text"  name="title"><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="cat">KATEGORI:</label> <br>
                <select class="form-select" name="cat">
                  <option value=""></option>
                  <option value="JALAN RAYA">JALAN RAYA</option>
                  <option value="ELEKTRIK">ELEKTRIK</option>
                  <option value="STAFF">STAFF</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="reportBy">NAMA PELAPOR:</label> <br>
                <input class="form-control" type="text"  name="reportBy" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="reportType">JENIS LAPORAN:</label> <br>
                <select class="form-select" name="reportType">
                  <option value=""></option>
                  <option value="KEROSAKAN">KEROSAKAN</option>
                  <option value="ADUAN">ADUAN</option>
                </select>
              </div>
              @can('isAdmin')
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="status">STATUS:</label> <br>
                <select class="form-select" name="status">
                  <option value=""></option>
                  <option selected value="DITERIMA">TERIMA</option>
                  <option value="SELESAI">SELESAI</option>
                </select>
              </div>
              @else
              <div hidden class="col-sm-6 mb-3">
                <label class="form-label" for="status">STATUS:</label> <br>
                <select class="form-select" name="status">
                  <option value=""></option>
                  <option selected value="DITERIMA">TERIMA</option>
                  <option value="SELESAI">SELESAI</option>
                </select>
              </div>
              @endcan

              <div class="col-sm-6 mb-3">
                <label class="form-label" for="date">TARIKH LAPORAN:</label> <br>
                <input readonly class="form-control" type="date" value="{{ $today }}"  name="date" id="datePicker"><br>
              </div>
              

            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>


 <script>
   $(document).ready( function() {
    $(document).ready( function() {
    var now = new Date();
    var today = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate();
    $('#datePicker').val(today);
});
 </script>
@endsection

