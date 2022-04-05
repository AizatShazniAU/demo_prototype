
@extends('bases')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  center;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@section('content')   
<style>
  .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  
  .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: #2196F3;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }
  </style>



@can('isAdmin')
<div class="card mb-3 overflow-hidden">
  <div class="card-header">
    <br>
    <div class="row align-items-center">
      <div class="col">
        <h4 class="mb-0">KONFIGURASI SISTEM</h4>
      </div>
      <div class="col-auto text-center pe-card">
        <button class="btn btn-secondary me-1 mb-1"><a style="color: black" href="/sysCon/create"><i class="fa fa-plus-square"></i>Tambah</a></button>
      </div>
    </div>
  </div>
<br>
@else
  
@endcan



<table class="buttonsED table table-striped border-bottom" style="text-align: center">
  <tr>
    <th>KONFIGURASI</th>
    {{-- <th>KOD APPLIKASI</th>
    <th>CAS PERLESENAN</th> --}}
    <th>SUIS</th>
    <th>TINDAKAN</th>
  </tr>
  @foreach ($sysCon as $sysCon)
  <tr >
    
    <td><ul> {{ $sysCon -> conType}}</ul></td>
    {{-- <td><ul> {{ $sysCon -> codeApp}}</ul></td>
    <td><ul> {{ $sysCon -> linCh}}</ul></td>
    <td><ul> {{ $sysCon -> userAcc}}</ul></td> --}}
    <td>
      <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
    </td>
    <td>
      <button class="buttonsED btn btn-sm btn-falcon-default" ><a style="color: black" href="/sysCon/{{$sysCon->id}}/edit"><i class="fas fa-pen" aria-hidden="true"></i></a></button>

      {{-- <a href="/sysCon/{{$sysCon->id}}/edit">KEMASKINI</a> --}}
      <form action="/sysCon/{{ $sysCon -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="buttonsED btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
    </td>
    </tr>
@endforeach
</table>
</div>

@endsection
