<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Portal Danus terbesar seJatinangor | DanusHunt</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/style.css")?>">
	<script src="<?php echo base_url("assets/js/js1.js")?>"></script>
</head>
<body>
	<header>
		<div class="navbar">
			<ul>
				<li><img src="<?php echo base_url("images/LOGO.png")?>" width="125" height="50" alt="DanusHunt"></li>
				<li><a href="<?php echo base_url("main")?>" >Home</a></li>
				<li><a href="<?php echo base_url("aboutus")?>" >About Us</a></li>
                <li style="float:right;">
                	<?php if($this->session->userdata('status') != "login"){?>
		            	<a href="<?php echo base_url("/loginawal")?>">Login / Daftar</a>
		            <?php }else {?>
						<a href="<?php echo base_url('loginhunter/logout'); ?>">Logout</a>
					<?php } ?>
				</li>
				<!-- <li style="justify-content:center;"><input type="text" class="search-box" placeholder="Cari Danus / Toko"></li> -->
			</ul>
		</div>
	</header>