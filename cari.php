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
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
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
  <aside class="main-sidebar" style="background-color:#ecf0f5;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color:#005197"><b>USER</b></p>
          <p style="color:#005197"><b>Jabatan</b></p>
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
        <b>REPORT LOADING BENGKEL</b>
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Report Load Bengkel</li>
      </ol>
    </section>
    <?php

  require_once 'db.php';
  $sql = "SELECT * FROM karyawan Where email='$email'";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                    $id_karyawan = $row['id_karyawan'];
                  }

  ?>
    <!-- Main content -->
    <section class="content">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <form action="cari.php" method="get">
              <div class="form-group">
                <label>Karyawan</label>
                <select name="id_karyawan" class="form-control select2" style="width: 100%;">
                  <option selected="selected">kosong</option>
                  <?php

  require_once 'db.php';
  $sql = "SELECT * FROM karyawan";
                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){

  ?>
                  <option value="<?php echo $row['id_karyawan'];?>"><?php echo $row['nama'];?></option>
                  <?php
                }
                ?>
                </select>
              </div>

              <!-- /.form-group -->
              <div class="form-group">
                <label>Tanggal</label>
                <select name="tanggal" class="form-control select2" style="width: 100%;">
                  <option selected="selected">kosong</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                  <option>05</option>
                  <option>06</option>
                  <option>07</option>
                  <option>08</option>
                  <option>09</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Bulan</label>
                <select name="bulan" class="form-control select2" style="width: 100%;">
                  <option selected="selected">kosong</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                  <option>05</option>
                  <option>06</option>
                  <option>07</option>
                  <option>08</option>
                  <option>09</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                </select>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Tahun</label>
                <select name="tahun" class="form-control select2" style="width: 100%;">
                  <option selected="selected">kosong</option>
                  <option value="21">2021</option>
                  <option value="22">2022</option>
                </select>
              </div>
              <div class="box-footer" style="background-color:#ecf0f5;">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
          <div>
            <br><br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped">
                <thead>
                <tr style="background-color:#00c0ef;">
                  <th>No SPK</th>
                  <th>Nama Costumer</th>
                  <th>No HP</th>
                  <th>Bengkel</th>
                  <th>P. Replace</th>
                  <th>P. Repair</th>
                  <th>P. Poles</th>
                  <th>P. SPR</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php

                  require_once('db.php');


                  $tgl = $_GET['tanggal'];
                  $bln = $_GET['bulan'];
                  $thn = $_GET['tahun'];

                  $id_karyawan = $_GET['id_karyawan'];


                  
                  if ($id_karyawan == "kosong" && $tgl == "kosong" && $bln == "kosong" && $thn == "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND bln='$bln' AND thn='$thn'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND bln='$bln' AND thn='$thn' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND bln='$bln' AND thn='$thn' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND bln='$bln' AND thn='$thn' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND bln='$bln' AND thn='$thn' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND bln='$bln' AND thn='$thn'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }


                  }
                  else if($id_karyawan != "kosong" && $tgl == "kosong" && $bln == "kosong" && $thn == "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where id_karyawan='$id_karyawan'";
                    

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan == "kosong" && $tgl != "kosong" && $bln == "kosong" && $thn == "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where tgl='$tgl'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan == "kosong" && $tgl == "kosong" && $bln != "kosong" && $thn == "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where bln='$bln'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan == "kosong" && $tgl == "kosong" && $bln == "kosong" && $thn != "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where thn='$thn'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where thn='$thn' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where thn='$thn' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where thn='$thn' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where thn='$thn' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where thn='$thn'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }

                  }
                  else if($id_karyawan != "kosong" && $tgl != "kosong" && $bln == "kosong" && $thn == "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND tgl='$tgl'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan != "kosong" && $tgl == "kosong" && $bln != "kosong" && $thn == "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln'";


                     $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan != "kosong" && $tgl == "kosong" && $bln == "kosong" && $thn != "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where id_karyawan='$id_karyawan' AND thn='$thn'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND thn='$thn' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND thn='$thn' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND thn='$thn' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND thn='$thn' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND thn='$thn'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }

                  else if($id_karyawan == "kosong" && $tgl != "kosong" && $bln != "kosong" && $thn == "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where tgl='$tgl' AND bln='$bln'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND bln='$bln' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND bln='$bln' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND bln='$bln' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND bln='$bln' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND bln='$bln'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }

                  }
                  else if($id_karyawan == "kosong" && $tgl != "kosong" && $bln == "kosong" && $thn != "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where tgl='$tgl' AND thn='$thn'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND thn='$thn' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND thn='$thn' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND thn='$thn' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND thn='$thn' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where tgl='$tgl' AND thn='$thn'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan == "kosong" && $tgl == "kosong" && $bln != "kosong" && $thn != "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where bln='$bln' AND thn='$thn'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND thn='$thn' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND thn='$thn' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND thn='$thn' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND thn='$thn' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where bln='$bln' AND thn='$thn'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan != "kosong" && $tgl == "kosong" && $bln != "kosong" && $thn != "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND thn='$thn'";


                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND thn='$thn' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND thn='$thn' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND thn='$thn' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND thn='$thn' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND thn='$thn'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }

                  else if($id_karyawan != "kosong" && $tgl != "kosong" && $bln != "kosong" && $thn == "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where id_karyawan='$id_karyawan' AND bln='$bln' AND tgl='$tgl'";


                    $sql1 = "SELECT count(*) as c FROM id_karyawan='$id_karyawan' AND bln='$bln' AND tgl='$tgl' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM id_karyawan='$id_karyawan' AND bln='$bln' AND tgl='$tgl' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM id_karyawan='$id_karyawan' AND bln='$bln' AND tgl='$tgl' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM id_karyawan='$id_karyawan' AND bln='$bln' AND tgl='$tgl' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM id_karyawan='$id_karyawan' AND bln='$bln' AND tgl='$tgl'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan == "kosong" && $tgl != "kosong" && $bln != "kosong" && $thn != "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where thn='$thn' AND bln='$bln' AND tgl='$tgl'";


                    $sql1 = "SELECT count(*) as c FROM thn='$thn' AND bln='$bln' AND tgl='$tgl' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM thn='$thn' AND bln='$bln' AND tgl='$tgl' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM thn='$thn' AND bln='$bln' AND tgl='$tgl' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM thn='$thn' AND bln='$bln' AND tgl='$tgl' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM id_karyawan='$id_karyawan' AND bln='$bln' AND tgl='$tgl'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }
                  else if($id_karyawan != "kosong" && $tgl != "kosong" && $bln != "kosong" && $thn != "kosong"){
                    $sql = "SELECT * FROM load_bengkel Where $id_karyawan='$id_karyawan' thn='$thn' AND bln='$bln' AND tgl='$tgl'";


                    $sql1 = "SELECT count(*) as c FROM $id_karyawan='$id_karyawan' thn='$thn' AND bln='$bln' AND tgl='$tgl' AND p_replace >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prc = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM $id_karyawan='$id_karyawan' thn='$thn' AND bln='$bln' AND tgl='$tgl' AND p_repair >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $prp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM $id_karyawan='$id_karyawan' thn='$thn' AND bln='$bln' AND tgl='$tgl' AND p_poles >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $ppl = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM $id_karyawan='$id_karyawan' thn='$thn' AND bln='$bln' AND tgl='$tgl' AND p_spr >= '1'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $psp = $row1['c'];
                    }

                    $sql1 = "SELECT count(*) as c FROM $id_karyawan='$id_karyawan' thn='$thn' AND bln='$bln' AND tgl='$tgl'";
                    $result = $db->query($sql1);
                    while($row1 = $result->fetch_assoc()){
                      $spk = $row1['c'];
                    }
                  }

                  $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                  ?>

                <tr style="background-color:#ecf0f5;">
                  <td><?php echo $row["spk"];?></td>
                  <td><?php echo $row["customer"];?></td>
                  <td><?php echo $row["hp"];?></td>
                  <td><?php echo $row["bengkel"];?></td>
                  <td><?php echo $row["p_replace"];?></td>
                  <td><?php echo $row["p_repair"];?></td>
                  <td><?php echo $row["p_poles"];?></td>
                  <td><?php echo $row["p_spr"];?></td>
                  <td><button type="button" class="btn btn-success" data-toggle="modal" 
                    data-target="#restok<?php echo $row["id"];?>">Edit</button> <a href="hapus.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>

                  <div id="restok<?php echo $row["id"];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                   <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      </div>
                      <div class="modal-body p-4">
                        <div class="row">
                          <div class="col-md-12">
                            <form action="edit.php" method="POST">
                              <div class="form-group">
                                <input type="hidden" class="form-control" id="field-1" name="id" value="<?php echo $row["id"];?>" required="">
                                <label for="field-1" class="control-label" >SPK :</label>
                                <input type="nama" class="form-control" id="field-1" name="spk" value="<?php echo $row["spk"];?>" required="">
                              </div>
                              <div class="form-group">
                                <label for="field-1" class="control-label" >Customer :</label>
                                <input type="nama" class="form-control" id="field-1" name="customer" value="<?php echo $row["customer"];?>" required="">
                              </div>
                              <div class="form-group">
                                <label for="field-1" class="control-label" >No HP :</label>
                                <input type="nama" class="form-control" id="field-1" name="hp" value="<?php echo $row["hp"];?>" required="">
                              </div>
                              <div class="form-group">
                                <label for="field-1" class="control-label" >Bengkel :</label>
                                <input type="nama" class="form-control" id="field-1" name="bengkel" value="<?php echo $row["bengkel"];?>" required="">
                              </div>
                              <div class="form-group">
                                <label for="field-1" class="control-label" >P.Replace :</label>
                                <input type="nama" class="form-control" id="field-1" name="p_replace" value="<?php echo $row["p_replace"];?>" required="">
                              </div>
                              <div class="form-group">
                                <label for="field-1" class="control-label" >P.Repair :</label>
                                <input type="nama" class="form-control" id="field-1" name="p_repair" value="<?php echo $row["p_repair"];?>" required="">
                              </div>
                              <div class="form-group">
                                <label for="field-1" class="control-label" >P.Poles :</label>
                                <input type="nama" class="form-control" id="field-1" name="p_poles" value="<?php echo $row["p_poles"];?>" required="">
                              </div>
                              <div class="form-group">
                                <label for="field-1" class="control-label" >P.SPR :</label>
                                <input type="nama" class="form-control" id="field-1" name="p_spr" value="<?php echo $row["p_spr"];?>" required="">
                              </div>
                          </div> 
                        </div>                   
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Edit</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  </div>
                  </div>

                </tr>

                <?php
                }
                ?>

              </table>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

        <div class="callout callout-info">
          <h4>Report Panel Harian</h4>

  
          <p>SPK  = <b><?php echo $spk; ?></b></p>
          <p>Panel Replace  = <b><?php echo $prc; ?></b></p>
          <p>Panel Repair   = <b><?php echo $prp; ?></b></p>
          <p>Panel Poles    = <b><?php echo $ppl; ?></b></p>
          <p>Panel SPR      = <b><?php echo $psp; ?></b></p>

        </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

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
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="ower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
