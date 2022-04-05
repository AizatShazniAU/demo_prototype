
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





<div class="card mb-3 overflow-hidden">
  <div class="card-header">
    <div class="row gx-0 align-items-center">
      <div class="col">
        <h4 class="mb-0">REKOD SUNTIKAN</h4>
      </div>
      <div class="col-auto text-center pe-card">
        <button class="btn btn-secondary me-1 mb-1"><a style="color: black" href="/inRec/create"><i class="fa fa-plus-square"></i>Tambah</a></button>
      </div>
    </div>
  </div>
<table class="buttonsED table table-striped border-bottom" style="text-align: center">
  <tr>
    <th>NAMA</th>
    <th>TARIKH SUNTIKAN</th>
    <th> NO IC</th>
    {{-- <th>LOKASI</th> --}}
    <th>TINDAKAN</th>
  </tr>
  @foreach ($inRec as $inRec)
  <tr >
    
    <td><ul> {{ $inRec -> staffName}}</ul></td>
    <td><ul> {{ $inRec -> date}}</ul></td>
    <td><ul> {{ $inRec -> icNo}}</ul></td>
    {{-- <td><ul> {{ $inRec -> loc}}</ul></td> --}}
    <td>
      <button class="buttonsED btn btn-sm btn-falcon-default" ><a style="color: black" href="/inRec/{{$inRec->id}}/edit"><i class="fas fa-pen" aria-hidden="true"></i></a></button>
      <form action="/inRec/{{ $inRec -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="buttonsED btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
    </td>
    </tr>
@endforeach
</table>

<br>
</div>


@endsection
