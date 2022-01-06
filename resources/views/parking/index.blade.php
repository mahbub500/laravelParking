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
  
          
                    <a href="/parking/create" class="btn btn-success"> <i class="fa fa-plus"></i></a>
            <br /> <br />
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Parking</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatables" class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>Code</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Vehicle Type</th>
                    <th>Rate Name</th>
                    <th>Rate</th>
                    <th>Slot</th>
                    <th>Total Time</th>
                    <th>Total Amount</th>
                    <th>Paid Status</th>
                                        <th>Actions</th>
                                    </tr>
                </thead>
                <tbody>
                   <tr>
                     @foreach ($parkings as $parking)
                         
                   
                      <td>MV-F7C04E</td>
                      <td> {{$parking->create_date}} <br />
                      </td>
                      <td>-</td>
                      {{-- <td>{{$parking->category_id}} </td> --}}
                      <td>{{$parking->category->category_name}}</td>
                    
                      <td>CNG</td>
                      <td>CNG</td>
                      <td>&#2547;2000</td>
                      <td>{{$parking->category_id}}</td>
                      <td> hour</td>
                      <td>&#2547;</td>
                      <td><label class="label label-danger">Not Paid</label></td>
                                            <td>
                          <div class="btn btn-group-sm">
                            <a href="parking/{{$parking->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            <form action="/parking/{{$parking->id}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                            <a  href="/invoice" class="btn btn-primary"><i class="fa fa-print"></i></a>
                                                    </div>
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
    function printParking(parking_url) {
      $.ajax({
        url: parking_url,
        type: 'post',
        success: function(response) {
  
          var mywindow = window.open('', 'PRINT', 'height=400,width=600');
  
          mywindow.document.write(response);
  
  
          mywindow.document.close(); // necessary for IE >= 10
          mywindow.focus(); // necessary for IE >= 10*/
  
          mywindow.print();
          mywindow.close();
  
        }
      })
    }
  
    $(document).ready(function() {
      $('#datatables').DataTable({
        'order': []
      });
  
      $("#parkingSideTree").addClass('active');
      $("#manageParkingSideTree").addClass('active');
  
    });
  </script><footer class="main-footer">
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