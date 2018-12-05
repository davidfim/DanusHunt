<html>
<head>
	<meta charset="UTF-8">
	<title>Login DanusHunt</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body background="images/bglogin.jpg">
	<img class="loginlogo"src="images/loginlogo.png">
	<div class="loginbox">
		<img src="images/avatar.png" class="avatar">
		<h1 style="margin-bottom:0; padding-bottom:0; ">Login</h1>
		<h1 style="margin-top:0; padding-top:0;">Danus Seller</h1>
		<form action="<?php echo base_url('loginseller/aksi_login'); ?>" method="post">
			<p>Username</p>
			<input type="text" name="username" placeholder="Masukan Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Masukan Password">
			<input type="submit" name="" value="Login">
			<a href="<?php echo base_url('daftarseller');?>">Belum punya akun ? Daftar Disini</a>
		</form>
	</div>
</body>
</html>