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
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            @if(session()->has('success'))
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">    
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
              </svg>
              
            <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div>
                    {{ session('success') }}
                </div>
            </div>
            @endif
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="/login" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
                      </div>
                      <div class="row mb-4">
                        <small>Belum Punya Akun? <a href="/register">registrasi</a> </small>
                      </div>
                      @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                      </div>
                      @endif
                      <button type="submit" class="btn btn-primary mr-2">login</button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
    
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