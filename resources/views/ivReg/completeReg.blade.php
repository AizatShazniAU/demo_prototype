
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
<h2>SENARAI TEMUDUGA</h2>


<table class="table table-striped border-bottom" style="text-align: center">
<thead>
  <tr>
    <th>NAMA</th>
    <th>NO PHONE</th>
    <th>TARIKH</th>
    <th>EMEL</th>
    <th>ALAMAT</th>
    <th>KEDATANGAN</th>
    @can('isAdmin')
    <th>TINDAKAN</th>

    @elsecan('isPanel')
    <th>TINDAKAN</th>

    @else
    @endcan
  </tr>
</thead>
<tbody>
  @foreach ($ivReg as $ivReg)
  <tr >
    
    <td><ul> {{ $ivReg -> appName}}</ul></td>
    <td><ul> {{ $ivReg -> phoneNo}}</ul></td>
    <td><ul> {{ $ivReg -> date}}</ul></td>
    <td><ul> {{ $ivReg -> email}}</ul></td>
    <td><ul> {{ $ivReg -> address}}</ul></td>
    <td><ul> {{ $ivReg -> att}}</ul></td>
      @can('isAdmin')

    <td>

      <form action="/ivReg/{{ $ivReg -> id }}" method="POST">
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
{{-- <a href="/ivReg/create">Tambah</a> --}}

@endsection
