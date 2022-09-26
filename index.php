<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - PEMILOS <?= date('Y')?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/img/logo-pilketos.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
<style>
  .container-login100{
    background: #1fdf5f;
  background: -webkit-linear-gradient(-135deg, #1fdf5f, #4158d0);
  background: -o-linear-gradient(-135deg, #1fdf5f, #4158d0);
  background: -moz-linear-gradient(-135deg, #1fdf5f, #4158d0);
  background: linear-gradient(-135deg, #1fdf5f, #4158d0);
  }

	.text-alert{
		font-size: 12px;
	}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/logo-pilketos.png" alt="IMG">
				</div>
				<form action="proses/login.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						<p>Login</p>
						E-PEMILOS <?= date('Y') ?>
					</span>

					<?php 
						session_start();
						require 'koneksi/koneksi.php';

						$query = mysqli_query($koneksi, "SELECT * FROM identitas_sekolah");
						$data = mysqli_fetch_assoc($query);

						if(isset($_SESSION['val']) && $_SESSION['val'] !='')
						{
							echo $_SESSION['val'];
							unset($_SESSION['val']);
						}
					?>

					<div class="wrap-input100 validate-input" data-validate = "Username required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="login" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<p class="txt2">
							&copy; <?= $data['nama_sekolah'] ?> <?= date('Y') ?>
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>

</body>
</html>