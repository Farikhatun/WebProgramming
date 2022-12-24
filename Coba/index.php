<?php
include 'koneksi.php';
if (isset($_POST) && !empty($_POST) ) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "insert into user set username='$username', password='$password'";
	mysqli_query($koneksi, $query);

	header("Location: registrasi.php");
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
	<form action="" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>

		<div class="mb-3">
			<label for="username" class="form-label">Username</label>
			<input type="text" name="username" class="form-control" id="username">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>

		//captcha//
		
		<a href="registrasi.php">Belum punya akun?</a>
		<button type="submit" class="btn btn-primary">Submit</button>

	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>