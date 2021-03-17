<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script src="js/sweetalert2.js"></script>
<?php
require_once( "db.php");


$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$password = $_POST['password'];







$insert = "INSERT INTO karyawan( nama,jabatan,email,password) VALUES('$nama','$jabatan','$email','$password')";
$result = mysqli_query($db,$insert);
	if ($result) {
			echo "<script>
				Swal.fire('Sukses.', 'Berhasil Register!', 'success').then(function(){
					setTimeout(document.location.href = 'login.php', 100);
					})
					</script>";

	}
	else{
		 echo "<script>
			Swal.fire('Gagal.', 'Gagal Register!', 'error').then(function(){
				setTimeout(document.location.href = 'register.php', 100);
				})
				</script>";
	}

?>
</body>
</html>