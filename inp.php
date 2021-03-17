<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script src="js/sweetalert2.js"></script>
<?php
require_once( "db.php");


$spk = $_POST['spk'];
$customer = $_POST['customer'];
$hp = $_POST['hp'];
$dealer = $_POST['dealer'];
$bengkel = $_POST['bengkel'];
$p_replace = $_POST['p_replace'];
$p_repair = $_POST['p_repair'];
$p_poles = $_POST['p_poles'];
$p_spr = $_POST['p_spr'];
$tgl = date('d');
$bln = date('m');
$thn = date('y');
$id_karyawan = $_POST['id_karyawan'];





$insert = "INSERT INTO load_bengkel( spk,customer,hp,dealer,bengkel,p_replace,p_repair,p_poles,p_spr,tgl,bln,thn,id_karyawan) VALUES('$spk','$customer','$hp','$dealer','$bengkel','$p_replace','$p_repair','$p_poles','$p_spr','$tgl','$bln','$thn','$id_karyawan')";
$result = mysqli_query($db,$insert);
	if ($result) {
			echo "<script>
				Swal.fire('Sukses.', 'Berhasil Update!', 'success').then(function(){
					setTimeout(document.location.href = 'index.php', 100);
					})
					</script>";

	}
	else{
		 echo "<script>
			Swal.fire('Gagal.', 'Gagal Update!', 'error').then(function(){
				setTimeout(document.location.href = 'bengkel_load.php', 100);
				})
				</script>";
	}

?>
</body>
</html>