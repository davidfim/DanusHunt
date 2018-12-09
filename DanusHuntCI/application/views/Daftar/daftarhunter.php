<html>
<head>
	<meta charset="UTF-8">
	<title>Daftar Hunter DanusHunt</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<script type="text/javascript" language="javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="assets/js/script.js"></script>
	
</head>
<body background="images/bglogin.jpg">
	<img class="loginlogo"src="images/loginlogo.png">
	<div class="daftarbox">
		<img src="images/avatar.png" class="avatar">
		<h1>Daftar Hunter</h1>
		<form id="registration_form" action="<?php echo base_url(). 'daftarhunter/prosesdaftar'; ?>" method="post">
			<input type="text"r name="NamaHunter" placeholder="Nama Lengkap" id="form_name" required>
			<span class="error_form" id="username_error_message"></span><input type="text" name="UsernameHunter" placeholder="Username" id="form_username" required>
			<span class="error_form" id="email_error_message"></span><input type="text" name="EmailHunter" placeholder="E-mail" id="form_email" required>
			<span class="error_form" id="password_error_message"></span><input type="password" name="PasswordHunter" placeholder="Password" id="form_password" required>
			<span class="error_form" id="retype_password_error_message"></span><input type="password" placeholder="Konfirmasi Password" id="form_retype_password" required>
			<span class="error_form" id="hp_error_message"></span><input type="text" name="NoHpHunter" placeholder="Nomor HP" id="form_hp" required>
			<!-- <input type="tel" pattern="^\d{10}$" name="NoHpHunter" placeholder="Nomor Hp" required > -->
			<input type="submit" name="daftar" value="Daftar">
		</form>
	</div>
</body>
</html>