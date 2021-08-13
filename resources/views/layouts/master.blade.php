
<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.partials._head')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
    @include('layouts.partials._navbar')

    @include('layouts.partials._sidebar')
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('layouts.partials._footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.partials._footer_script')
</body>
</html>
