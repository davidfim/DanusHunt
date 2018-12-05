<html>
<head>
	<meta charset="UTF-8">
	<title>Daftar Seller DanusHunt</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body background="images/bglogin.jpg">
	<img class="loginlogo"src="images/loginlogo.png">
	<div class="daftarbox" style="height: 600px; position: absolute; top: 20%;">
		<img src="images/avatar.png" class="avatar">
		<h1>Daftar Seller</h1>
		<form action="<?php echo base_url(). 'daftarseller/prosesdaftar'; ?>" method="post">
			<input type="text" name="NamaSeller" placeholder="Nama Seller" required>
			<input type="text" name="UsernameSeller" placeholder="Username Seller" required>
			<input type="password" name="PasswordSeller" placeholder="Password Seller" required>
			<input type="text" name="EmailSeller" placeholder="Email Seller" required>
			<input type="text" name="NoHpSeller" placeholder="No.HP Seller" required>
			<input type="text" name="IdLineSeller" placeholder="Id Line Seller">	
			<input type="submit" name="daftar" value="Daftar">
		</form>
	</div>
</body>
</html>