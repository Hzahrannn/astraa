<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="js/sweetalert2.js"></script>
<body>
<?php
	session_start();
	require_once( "db.php");

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql= "SELECT * FROM karyawan WHERE email = '$email'";
	$query = $db->query($sql);
	$hasil = $query->fetch_assoc();
	if($query->num_rows == 0) {
		echo "<script>
			Swal.fire('Gagal.', 'Gagal Login!', 'error').then(function(){
				setTimeout(document.location.href = 'login.php', 100);
				})
				</script>";
	} else {
		if ($password <> $hasil['password']){
			echo "<script>
			Swal.fire('Gagal.', 'Gagal Login!', 'error').then(function(){
				setTimeout(document.location.href = 'login.php', 100);
				})
				</script>";
		}
		else {
		$_SESSION ['email'] = $hasil['email'];
		
		echo "<script>
			Swal.fire('Berhasil.', 'Berhasil Login!', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
		}
	}
	?>
</body>
</html>
