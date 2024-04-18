<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
  <title>Kasturi Master| Admin</title> 
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> 
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <link rel="stylesheet" href="/admin/css/custom.css"> 
</head> 
<body class="hold-transition sidebar-mini">
<div class="loader-container" id="loaderContainer">
    <div class="loader"></div>
</div> 
<div id="content" style="display:none;"> 
</div>
<div class="wrapper"> 
  @include('admin.layouts.header') 
  
  @include('admin.layouts.sidebar')
     @yield('content')
    <aside class="control-sidebar control-sidebar-dark"> 
    </aside> 
   @include('admin.layouts.footer')
</div>
 
<script src="/admin/plugins/jquery/jquery.min.js"></script> 
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="dist/js/adminlte.js"></script> 
<script src="/admin/plugins/select2/js/select2.full.min.js"></script> 
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/jszip/jszip.min.js"></script>
<script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="/admin/dist/js/demo.js"></script> 
<script src="/admin/js/custom.js"></script> 

</body>
</html>
