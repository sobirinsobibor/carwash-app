<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=" {{ asset('stellar-master/vendors/simple-line-icons/css/simple-line-icons.css') }} ">
    <link rel="stylesheet" href=" {{ asset('stellar-master/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('stellar-master/vendors/css/vendor.bundle.base.css') }} ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href=" {{ asset('stellar-master/vendors/daterangepicker/daterangepicker.css') }} ">
    <link rel="stylesheet" href=" {{ asset('stellar-master/vendors/chartist/chartist.min.css') }} ">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('stellar-master/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=" {{ asset('stellar-master/stellar-master/images/favicon.png') }} " />
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Register</a>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="/register" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail3">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama" onchange="makeUsername()" name="name">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" readonly>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Role ID</label>
                        @foreach ($roles as $r)
                        <input type="text" class="form-control" id="role" value="{{ $r->id }}" name="role_id">    
                        @endforeach
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <small class="d-block mb-3">
                        Already Registered? <a href="/login">Login!</a>
                      </small>
                      @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                      </div>
                      @endif
                      <button type="submit" class="btn btn-primary mr-2">Register</button>
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
    
    <!-- plugins:js -->
    <script src="{{ asset('stellar-master/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('stellar-master/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('stellar-master/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('stellar-master/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('stellar-master/vendors/chartist/chartist.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('stellar-master/js/off-canvas.js') }}"></script>
    <script src="{{ asset('stellar-master/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('stellar-master/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>