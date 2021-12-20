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

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->

          <div class="row">

        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>7/8</h3>

              <p>Available Parking Slots</p>
            </div>
            <div class="icon">
              <i class="ion ion-navigate"></i>
            </div>
            <a href="../slots" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>14</h3>

              <p>Total Parking</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-car"></i>
            </div>
            <a href="../parking" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>3</h3>

              <p>System Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-person"></i>
            </div>
            <a href="../users" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>$5820</h3>

              <p>Total Earnings</p>
            </div>
            <div class="icon">
              <i class="ion ion-social-usd"></i>
            </div>
            <a href="../parking" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-lg-3 col-xs-12"></div>

        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>5</h3>

              <p>Available Parking Rates</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-speedometer-outline"></i>
            </div>
            <a href="../rates" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>1</h3>

              <p>Pending Payment</p>
            </div>
            <div class="icon">
              <i class="ion ion-load-a"></i>
            </div>
            <a href="../parking" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-12"></div>

      </div>
    </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#dashboardSideNav").addClass('active');
  });
</script>
@extends('templates/footer')
