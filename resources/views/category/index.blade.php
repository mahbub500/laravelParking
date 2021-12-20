@extends('templates/header')
<body class="hold-transition skin-purple-light	sidebar-mini">
  <div class="wrapper"><header class="main-header">
  <!-- Logo -->
  <a href="../" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>P</b>S</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Parking System</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

  </nav>
  @extends('templates/side_menubar')
</header>
</aside><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Category</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Category</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <a href="{{url('category/create')}}" class="btn btn-success"> <i class="fa fa-plus"></i></a>
          <br /> <br />
        
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Category</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="datatables" class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>Group Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($category_all as $category)
                
              
                <tr>
                  <td> {{$category->category_name}} </td>
                  <td>
                    @if ($category->category_active ==  1)
                    <span class="label label-success">Active</span>                                         
                    @else                        
                    <span class="label label-warning">Not Active</span>
                    @endif
                    
                    </td>
                    <td >
                        <a href="/category/{{$category->id}}/edit" class="btn  btn-warning  btn-sm"><i class="fa fa-pencil"></i></a>
                        <form  action="/category/{{$category->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"> </i> </button>
                        </form>
                        {{-- <a href=""  class="btn btn-danger btn-sm"> <i class="fa fa-trash"> </i></a> --}}
                      
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $('#datatables').DataTable();

    $("#categorySideTree").addClass('active');
    $("#manageCategorySideTree").addClass('active');

  });
</script>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Developed </b>with <span class="text-danger"> ❤ </span> by Mahbubur Rahman
  </div>
  <strong> &copy; 2020 - 2021 - Parking Management System
</footer>

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
<!-- ./wrapper -->

</body>

</html>