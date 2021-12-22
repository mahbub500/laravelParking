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
            
            
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Edit Rate</h3>
              </div>
              <form role="form" action="/rate/{{$rates->id}}" method="post">
                @csrf
                @method('PATCH')
                <div class="box-body">
  
                                  <div class="form-group">
                    <label for="group_name">Rate Name</label>
                    <input type="text" class="form-control" id="rate_name"  name="rate_name" placeholder="Rate name" value="{{$rates->rate_name}}">
                  </div>
                  <div class="form-group">
                    <label for="group_name">Category</label>
                    <select class="form-control" id="category_name" name="category_name">
                       @foreach ($category_all as $category)
                       <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="group_name">Type</label>
                    <select class="form-control" id="type" name="type">
                      <option value="">Select Rate</option>
                      <option value="1" >Fixed</option>
                      <option value="2" selected>Hourly</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="group_name">Rate</label>
                    <input type="text" class="form-control" id="rate" name="rate" placeholder="Rate" value="{{$rates->rate}}">
                  </div>
                  <div class="form-group">
                    <label for="group_name">Active</label>
                    <select class="form-control" id="rate_status" name="rate_status">
                      <option value="1" selected>Active</option>
                      <option value="2" >Inactive</option>
                    </select>
                  </div>
                  
                </div>
                <!-- /.box-body -->
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Save Changes</button>
                  <a href="http://localhost/parkingci/rates/" class="btn btn-danger">Back</a>
                </div>
              </form>
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
      $("#ratesSideTree").addClass('active');
      $("#manageRatesSideTree").addClass('active');
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