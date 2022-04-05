
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
<h2>SENARAI KELULUSAN LESEN</h2>


<table class="table table-striped border-bottom" style="text-align: center; width:100%">
<thead>
  <tr>
  <th>NAMA</th>
  <th>TARIKH KELULUSAN</th>
  <th>STATUS</th>
  {{-- <th>STATUS</th>
  <th>STATUS</th> --}}
  @can('isAdmin')
  <th>TINDAKAN</th>
  @else
  @endcan
</tr>
</thead>
<tbody style="text-align: center;">
  @foreach ($approvelic as $approvelic)
  <tr>
    <td><ul> {{ $approvelic -> appName}}</ul></td>
    <td><ul> {{ $approvelic -> date}}</ul></td>
    <td><ul> {{ $approvelic -> status}}</ul></td>
    {{-- <td><ul > {{ $approvelic -> status}}</ul></td>
    <td><ul> {{ $approvelic -> status}}</ul></td> --}}
    @can('isAdmin')
    <td><a href="/approvelic/{{$approvelic->id}}/edit">KEMASKINI</a>
      <form action="/approvelic/{{ $approvelic -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i>BUANG</button>
        </form>
    </td>
    @else
    @endcan
    </tr>
@endforeach
</tbody>
</table>

<br>
{{-- <a href="/approvelic/create">Tambah</a> --}}

@endsection
