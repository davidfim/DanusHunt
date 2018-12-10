<html>
<head>
	<meta charset="UTF-8">
	<title>Daftar Seller DanusHunt</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<script type="text/javascript" language="javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="assets/js/script.js"></script>
</head>
<body background="images/bglogin.jpg">
	<img class="loginlogo"src="images/loginlogo.png">
	<div class="daftarbox">
		<img src="images/avatar.png" class="avatar">
		<h1>Daftar Seller</h1>
		<form id="registration_form" action="<?php echo base_url(). 'daftarseller/prosesdaftar'; ?>" method="post">
			<input type="text" name="NamaSeller" placeholder="Nama Seller" required>
			<span class="error_form" id="username_error_message"></span><input type="text" name="UsernameSeller" placeholder="Username Seller" id="form_username" required>
			<span class="error_form" id="password_error_message"></span><input type="password" name="PasswordSeller" placeholder="Password Seller" id="form_password" required>
			<span class="error_form" id="retype_password_error_message"></span><input type="password" placeholder="Konfirmasi Password" id="form_retype_password" required>
			<span class="error_form" id="email_error_message"></span><input type="text" name="EmailSeller" placeholder="Email Seller" id="form_email" required>
			<span class="error_form" id="hp_error_message"></span><input type="text" name="NoHpSeller" placeholder="No.HP Seller" id="form_hp" required>
			<input type="text" name="IdLineSeller" placeholder="Id Line Seller (Tidak Wajib)">	
			<input type="submit" name="daftar" value="Daftar">
		</form>
	</div>
</body>
</html>
