<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ trans('language.adminTitle') }}</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('admin-page/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('admin-page/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <base href={{asset('')}}>
  <script>
    window.onload = function() {
        CKEDITOR.replace( 'editor1' );
    };
</script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin-layout.admin-header')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
    
          <!-- Topbar -->
          @include('admin-layout.admin-topbar')
          <!-- End of Topbar -->
    
          @yield('container')
    
        </div>
        <!-- End of Main Content -->
    
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Admin Dashboard</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
    
      </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin-page/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin-page/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin-page/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin-page/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('admin-page/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin-page/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('admin-page/js/demo/chart-pie-demo.js')}}"></script>
  <script src="{{asset('ckeditor/ckeditor.js') }}"></script>
</body>
</html>
