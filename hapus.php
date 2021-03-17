<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script src="js/sweetalert2.js"></script>
<?php
require_once( "db.php");

$id = $_GET['id'];

$delete = "DELETE FROM load_bengkel WHERE id='$id'";
$result = mysqli_query($db,$delete);
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