
@extends('base')
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






<br>
<h2>SENARAI SEMAKAN CCD </h2>


<table class="table table-striped border-bottom" style="text-align: center">
  <tr>
    <th>ID CCD</th>
    <th>TARIKH</th>
    <th>STATUS</th>
    <th>TINDAKAN</th>
  </tr>
  @foreach ($sCCD as $sCCD)
  <tr >
    
    <td><ul> {{ $sCCD -> ccd_id}}</ul></td>
    <td><ul> {{ $sCCD -> date}}</ul></td>
    <td><ul> {{ $sCCD -> status}}</ul></td>
    <td><a href="/sCCD/{{$sCCD->id}}/edit">KEMASKINI</a>
      <form action="/sCCD/{{ $sCCD -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i>BUANG</button>
        </form>
    </td>
    </tr>
@endforeach
</table>

<br>
{{-- <a href="/sCCD/create">Tambah</a> --}}

@endsection
