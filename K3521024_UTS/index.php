<?php
include 'koneksi.php';
if (isset($_POST) && !empty($_POST)) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "insert into userlogin set username='$username', password='$password'";
	mysqli_query($koneksi, $query);
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UTS PemWeb</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
	<form action="" method="post">
		<center>
			<?php include "header.php"; ?>
			<h2>Halaman Login</h2>
			<hr>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>

			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Captcha</td>
					<td><img src="captcha.php">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input name="kodecaptcha" placeholder="Masukkan Kode Captcha" value="" maxlength="7" /></td>
				</tr>
			</table>

			<br>
			<div class="remember">
				<input type="checkbox" id="remember" name="remember" />
				<label for="remember">Remember Me</label>
			</div>
			<button type="submit" class="btn btn-primary">
				<a href="akun.php" style="color: white; text-decoration: none;">Submit</a>
			</button>
			<br>
			<a href="registrasi.php">Belum punya akun?</a>
		</center>
	</form>

	<?php include "footer.php"; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
	crossorigin="anonymous"></script>

</body>

</html>