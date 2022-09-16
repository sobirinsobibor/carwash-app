<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Motoro Dashboard</title>
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
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('dashboard.partials.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          @include('dashboard.partials.sidebar')

          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('dashboard.partials.footer')
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
          <!-- page-body-wrapper ends -->
      </div>
    <!-- container-scroller -->
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
    <script>
      $(document).ready(function(){
        $('.add-one').trigger('click');
      });
    </script>
  </body>
</html>