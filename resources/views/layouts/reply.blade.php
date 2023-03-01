<!DOCTYPE html>
<html lang="en">

<head>
      <!-- 1. Addchat css -->
<link href="<?php echo asset('assets/addchat/css/addchat.min.css') ?>" rel="stylesheet">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ticketing</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>


<body class="hold-transition sidebar-mini layout-fixed">

    <!-- 2. AddChat widget -->
    <div id="addchat_app"
   data-baseurl="<?php echo url('') ?>"
   data-csrfname="<?php echo 'X-CSRF-Token' ?>"
   data-csrftoken="<?php echo csrf_token() ?>"
></div>
    <!-- 3. AddChat JS -->
   <!-- Modern browsers -->
   <script type="module" src="<?php echo asset('assets/addchat/js/addchat.min.js') ?>"></script>
   <!-- Fallback support for Older browsers -->
   <script nomodule src="<?php echo asset('assets/addchat/js/addchat-legacy.min.js') ?>"></script>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


                <!-- Topbar -->
                @include('layouts.includes.navbar')
                <!-- End of Topbar -->


                 <!-- Main Content -->

                @yield('content')


             <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
           <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{ route('logout') }} "onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" role="button" >Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
        </div>
         </div>
       </div>
    </div>

                <!-- Begin Page Content -->


                    <!-- Page Heading -->


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('template/js/demo/chart-pie-demo.js')}}"></script>

    @include('sweetalert::alert')

    <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
    <script src="{{ asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>
