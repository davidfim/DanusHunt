<html>
<head>
	<meta charset="UTF-8">
	<title>Daftar Hunter DanusHunt</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body background="images/bglogin.jpg">
	<img class="loginlogo"src="images/loginlogo.png">
	<div class="daftarbox">
		<img src="images/avatar.png" class="avatar">
		<h1>Daftar Hunter</h1>
		<form action="<?php echo base_url(). 'daftarhunter/prosesdaftar'; ?>" method="post">
			<input type="text" name="NamaHunter" placeholder="Nama Lengkap" required>
			<input type="text" name="UsernameHunter" placeholder="Username" required>
			<input type="text" name="EmailHunter" placeholder="E-mail" required>
			<input type="password" name="PasswordHunter" placeholder="Password" required>
			<input type="text" name="NoHpHunter" placeholder="Nomor HP" required>
			<input type="submit" name="daftar" value="Daftar">
		</form>
	</div>
</body>
</html>