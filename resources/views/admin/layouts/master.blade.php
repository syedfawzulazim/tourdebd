
<!DOCTYPE html>
<html>
<head>

  @include('admin.partials.links_scripts.meta')
  
  <title>@yield('title')</title>
  
  
  @include('admin.partials.links_scripts.links')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.partials.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.partials.slider')
  <!-- /. Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.partials.cheader')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
       @yield('content')
        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.partials.footer')

  <!-- Control Sidebar -->
  @include('admin.partials.slidebar')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    @include('admin.partials.links_scripts.scripts')

</body>
</html>
