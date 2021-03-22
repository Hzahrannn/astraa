<!DOCTYPE html>
<html>
<head>
  <?php
                  session_start();
                  if(!isset($_SESSION['email'])) {
                  header('location:login.php'); }
                  else{
                  $email=$_SESSION['email'];}

            
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
  <!-- Left side column. contains the logo and sidebar -->
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
            </i> <span style="color:#005197"><b>Report Load Bengkel</b></span>
          </a>
        </li>
        <?php
        if($jabatan == "Manager"){
        ?>
        <li>
          <a href="cari.php?id_karyawan=kosong&tanggal=kosong&bulan=kosong&tahun=kosong">
            </i> <span style="color:#005197"><b>Arsip Data</b></span>
          </a>
        </li>
        <?php
        }
        ?>
        <li>
          <a href="logout.php">
            </i> <span style="color:#005197"><b>Logout</b></span>
          </a>
        </li>
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2 style="color:black">
        <b>FORM LOADING BENGKEL</b>
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Form Load Bengkel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php

  require_once 'db.php';
  $sql = "SELECT * FROM karyawan Where email='$email'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $id_karyawan = $row['id_karyawan'];
                  }

  ?>
      <div class="col-md-6"style="background-color:#ecf0f5;">
          <!-- general form elements -->
          <div style="background-color:#ecf0f5;">
            <div class="box-header"style="background-color:#ecf0f5;">
              <h3 class="box-title"><b>Nama Dealer</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="inp.php">
              <div class="box-body">
                
                <div class="btn-group btn-group-toggle" data-toggle="buttons" >
                  <label class="btn btn-info">
                    <input type="radio" name="dealer" id="option1" value="Auto 2000" > Auto 2000
                  </label>
                  <label class="btn btn-info">
                    <input type="radio" name="dealer" id="option2" value="Daihatsu" > Daihatsu
                  </label>
                  <label class="btn btn-info">
                    <input type="radio" name="dealer" id="option3" value="Others"> Others
                  </label>
                  
                </div>
           
                <br><br><br>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nomor SPK</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>">
                    <input type="text" name="spk" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nama Customer</label>
                  <div class="col-sm-10">
                    <input type="text" name="customer" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP</label>
                  <div class="col-sm-10">
                    <input type="text" name="hp" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nama Bengkel</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="bengkel">
                      <option>Auto 2000</option>
                      <option>Daihatsu</option>
                      <option>Others</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">other</label>
                  <div class="col-sm-10">
                    <input type="number" name="p_replace" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Panel Replace</label>
                  <div class="col-sm-10">
                    <input type="number" name="p_replace" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Panel Repair</label>
                  <div class="col-sm-10">
                    <input type="text" name="p_repair" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Panel Poles</label>
                  <div class="col-sm-10">
                    <input type="text" name="p_poles" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Panel SPR</label>
                  <div class="col-sm-10">
                    <input type="text" name="p_spr" class="form-control">
                  </div>
                </div>

                

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer" style="background-color:#ecf0f5;">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div> 

    </section>
    <!-- /.content -->
  </div>

 

 
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
</body>
</html>
