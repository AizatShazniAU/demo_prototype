@extends('base')

@section('content')     

  <form method="POST" action="/user/{{ $user->id }}">
    @method('PUT')
    @csrf
 
    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h5 class="mb-0">UBAH SUAI USER</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row gx-2">
              </div>
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="name">NAME:</label> <br>
                <input value="{{ $user->name }}" class="form-control" type="text"  name="name" ><br>
              </div>
              {{-- <div class="col-sm-6 mb-3">
                <label class="form-label" for="password">PASSWORD:</label> <br>
                <input value="{{ $user->password }}" class="form-control" type="text"  name="password" ><br>
              </div> --}}
              <div class="col-sm-6 mb-3">
                <label class="form-label" for="role">ROLE:</label> <br>
                <select class="form-select" name="role" >
                  <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                  <option value="1">USER</option>
                  <option value="2">PANEL</option>
                  <option value="3">ADMIN</option>
                </select>
              </div>
            </div>
        </div>
      </div>
    </div><br>
    <button type="submit" value="submit" class="btn btn-primary">Hantar</button>
  </form>

@endsection

