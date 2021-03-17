<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script src="js/sweetalert2.js"></script>
<?php
require_once( "db.php");

$id = $_POST['id'];
$spk = $_POST['spk'];
$customer = $_POST['customer'];
$hp = $_POST['hp'];
$bengkel = $_POST['bengkel'];
$p_replace = $_POST['p_replace'];
$p_repair = $_POST['p_repair'];
$p_poles = $_POST['p_poles'];
$p_spr = $_POST['p_spr'];
$tgl = date('d');
$bln = date('m');
$thn = date('y');
$id_karyawan = "1";





$update = "UPDATE load_bengkel SET spk='$spk', customer='$customer', hp='$hp', bengkel='$bengkel', p_replace='$p_replace', p_repair='$p_repair', p_poles='$p_poles', p_spr='$p_spr' WHERE id='$id'";
$result = mysqli_query($db,$update);
	if ($result) {
			echo "<script>
				Swal.fire('Sukses.', 'Berhasil Update!', 'success').then(function(){
					setTimeout(document.location.href = 'bengkel_report.php?id=all', 100);
					})
					</script>";

	}
	else{
		 echo "<script>
			Swal.fire('Gagal.', 'Gagal Update!', 'error').then(function(){
				setTimeout(document.location.href = 'bengkel_report.php?id=all', 100);
				})
				</script>";
	}

?>
</body>
</html>