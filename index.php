<!DOCTYPE html>
<html>
<head>
  <?php
                  session_start();
                  if(!isset($_SESSION['email'])) {
                  header('location:login.php'); }
                  else{
                  $email=$_SESSION['email'];}

                  $tgl = date('d');
                  $bln = date('m');
                  $thn = date('y');
                  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asuransi Astra</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo" style="background-color:#ecf0f5;" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="http://4.bp.blogspot.com/-n2RCsC4tlLE/U14JLssc5rI/AAAAAAAARHM/KrFB1TO7ToA/s1600/LOGO+BARU+ASURANSI+ASTRA.png"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="http://4.bp.blogspot.com/-n2RCsC4tlLE/U14JLssc5rI/AAAAAAAARHM/KrFB1TO7ToA/s1600/LOGO+BARU+ASURANSI+ASTRA.png"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:#ecf0f5;">
      <!-- Sidebar toggle button-->
      </a>
    </nav>
  </header>
  <?php

  require_once 'db.php';
  $sql = "SELECT * FROM karyawan Where email='$email'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $id_karyawan = $row['id_karyawan'];
                    $nama = $row['nama'];
                    $jabatan = $row['jabatan'];
                  }

  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color:#ecf0f5;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color:#005197"><b><?php echo $nama; ?></b></p>
          <p style="color:#005197"><b><?php echo $jabatan; ?></b></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="index.php">
            </i> <span style="color:#005197"><b>Diagram Analisis</b></span>
          </a>
        </li>
        <li>
          <a href="bengkel_load.php">
            </i> <span style="color:#005197"><b>Form Load Bengkel</b></span>
          </a>
        </li>
        <li>
          <a href="bengkel_report.php?id=all">
            </i> <span style="color:#005197"><b>Form Load Bengkel</b></span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2 style="color:black">
        <b>LOADING BENGKEL</b>
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Diagram Analisis</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-md-6" style="background-color:#ecf0f5;">
          <div style="background-color:#ecf0f5;">
            <div class="box-header"style="background-color:#ecf0f5;">
              <h3 class="box-title" style="color:#005197"><b>Auto 2000</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php
              require_once( "db.php");
                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Auto 2000' AND bengkel='Auto 2000' AND tgl='$tgl' AND bln='$bln' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $ad = $row['c'];
                  }

                  $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Auto 2000' AND tgl='$tgl' AND bln='$bln' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $ad1 = $row['c'];
                  }
              ?>

              <p>Today</p>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $ad/$ad1*100; echo "%";?>">
                  <span class="sr-only">40% Complete (success)</span><a><?php echo $ad/$ad1*100; echo "%";?></a>
                </div>
              </div>

              <?php
              require_once( "db.php");
                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Auto 2000' AND bengkel='Auto 2000' AND bln='$bln' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $am = $row['c'];
                  }

                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Auto 2000' AND bln='$bln' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $am1 = $row['c'];
                  }
              ?>

              <p>Month</p>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $am/$am1*100; echo "%";?>">
                  <span class="sr-only">20% Complete</span><a><?php echo $am/$am1*100; echo "%";?></a>
                </div>
              </div>

              <?php
              require_once( "db.php");
                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Auto 2000' AND bengkel='Auto 2000' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $ay = $row['c'];
                  }

                require_once( "db.php");
                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Auto 2000' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $ay1 = $row['c'];
                  }
              ?>

              <p>Year</p>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $ay/$ay1*100; echo "%";?>">
                  <span class="sr-only">60% Complete (warning)</span><a><?php echo $ay/$ay1*100; echo "%";?></a>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  

        <div class="col-md-6" style="background-color:#ecf0f5;">
         <div style="background-color:#ecf0f5;">
            <div class="box-header" style="background-color:#ecf0f5;">
              <h3 class="box-title" style="color:#005197"><b>Daihatsu</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="background-color:#ecf0f5;">

              <?php
              require_once( "db.php");
                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Daihatsu' AND bengkel='Daihatsu' AND tgl='$tgl' AND bln='$bln' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $dd = $row['c'];
                  }

                require_once( "db.php");
                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Daihatsu' AND tgl='$tgl' AND bln='$bln' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $dd1 = $row['c'];
                  }
              ?>

              <p>Today</p>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dd/$dd1*100; echo "%";?>">
                  <span class="sr-only">40% Complete (success)</span><a><?php echo $dd/$dd1*100; echo "%";?></a>
                </div>
              </div>

              <?php
              require_once( "db.php");
                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Daihatsu' AND bengkel='Daihatsu' AND bln='$bln' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $dm = $row['c'];
                  }

                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Daihatsu' AND bln='$bln' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $dm1 = $row['c'];
                  }
              ?>

              <p>Month</p>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dm/$dm1*100; echo "%";?>">
                  <span class="sr-only">20% Complete</span><a><?php echo $dm/$dm1*100; echo "%";?></a>
                </div>
              </div>

              <?php
              require_once( "db.php");
                $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Daihatsu' AND bengkel='Daihatsu' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $dy = $row['c'];
                  }

                  $sql = "SELECT count(*) as c FROM load_bengkel Where dealer='Daihatsu' AND thn='$thn' AND id_karyawan='$id_karyawan'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $dy1 = $row['c'];
                  }
              ?>

              <p>Year</p>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dy/$dy1*100; echo "%";?>">
                  <span class="sr-only">60% Complete (warning)</span><a><?php echo $dy/$dy1*100; echo "%";?></a>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
        
          </div>
          <!-- /.box -->
        </div>

        <!-- DONUT CHART -->
        <div class="row" style="background-color:#ecf0f5;">
          <div class="col-md-6" style="background-color:#ecf0f5;">
            <div style="background-color:#ecf0f5;">
              <div class="box-header" style="background-color:#ecf0f5;">
                <h3 class="box-title" style="color:#005197"><b>All Load</b></h3>
              </div>
              <div class="box-body">
                <canvas id="myChart" style="height:50px"></canvas>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="js/Chart.js"></script><script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Astra 2000", "Daihatsu"],
        datasets: [{
          label: '# of Votes',
          data: [<?php echo $ad; ?>, <?php echo $dd; ?>],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)'
          ],
          borderWidth: 1
        }]
      }
      
    });
  </script>
</body>
</html>
