
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
<h2>SENARAI BIL</h2>


<table class="table table-striped border-bottom" style="text-align: center">
  <tr>
    <th>NAMA</th>
    <th>PASSWORD</th>
    <th>EMAIL</th>
    <th>ROLE</th>
    {{-- @can('isAdmin')
    <th>TINDAKAN</th>
    @else
    @endcan --}}
  </tr>
  @foreach ($auth as $auth)
  <tr >
    
    <td><ul> {{ $auth -> user}}</ul></td>
    <td><ul> {{ $auth -> password}}</ul></td>
    <td><ul> {{ $auth -> email}}</ul></td>
    <td><ul> {{ $auth -> role}}</ul></td>
      @can('isAdmin')
    <td>

      <a href="/auth/{{$auth->id}}/edit">KEMASKINI</a>
      <form action="/auth/{{ $auth -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-falcon-default"><i class="fa fa-trash" aria-hidden="true"></i>BUANG</button>
      </form>
    </td>
    @else
    @endcan
    </tr>
@endforeach
</table>

<br>
<a href="/auth/create">Tambah</a>

@endsection
