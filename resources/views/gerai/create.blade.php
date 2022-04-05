@extends('base')
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> --}}
{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA21sWm1tU4TD2tNanNy3wYA39smT2dVpw&callback=initMap"></script> --}}
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA21sWm1tU4TD2tNanNy3wYA39smT2dVpw&libraries=places"></script> --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 {{-- <script type="text/javascript" src="{% static 'js/jquery-3.3.1.min.js' %}"></script>
<script type="text/javascript" src="{% static 'js/L.TileLayer.BetterWMS.js' %}"></script> --}}
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
@section('content')     

  <form method="POST" action="/gerai/">
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
                <input class="form-control" type="text"  name="namaG" ><br>
              </div>         
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="ownerG">NAMA PEMILIK:</label> <br>
                <input class="form-control" type="text"  name="ownerG" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="loc">LOKASI:</label> <br>
                
                <input class="form-control" type="text"  name="loc" ><br>
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="rentFee">HARGA SEWA(RM):</label> <br>
                <input class="form-control" type="number"  min="0" name="rentFee" ><br>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>
</div>
@endsection

