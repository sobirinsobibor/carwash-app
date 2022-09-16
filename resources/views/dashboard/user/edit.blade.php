@extends('dashboard.layouts.main')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" method="post" action="/dashboard/users/{{ $user->username }}" method="post">
                    @method('put')
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail3">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama" oninput="makeUsername()" name="name" value="{{ $user->name }}">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                    </div>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" readonly value="{{ $user->username }}">
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <select class="js-example-basic-single p-2" style="width:100%" name="role_id">
                    @foreach ($roles as $r)
                    @if (old('role_id', $user->role_id) == $r->id)
                    <option value="{{ $r->id }}" selected>{{ $r->role_name }}</option>
                    @else
                    <option value="{{ $r->id }}">{{ $r->role_name }}</option>    
                    @endif
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="{{ $user->password }}">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Update User</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>

<script>
    function username(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
  
    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    return str + Math.floor(Math.random() * 567);;
    }

    function makeUsername(){
        var inputName = document.getElementById("nama");
        var inputUsername = document.getElementById('username');
        inputUsername.value = username(inputName.value) 
    }
</script>
        

@endsection