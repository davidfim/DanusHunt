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
				<li><img src="<?php echo base_url("images/LOGO.png")?>" style="padding: 0" width="125" height="50" alt="DanusHunt"></li>
				<li style="margin-top:10px;"><a href="<?php echo base_url("main")?>" >Home</a></li>
				<li style="margin-top:10px;"><a href="<?php echo base_url("aboutus")?>" >About Us</a></li>
				
                <li style="float:right;margin-top:10px;">
                	<?php if($this->session->userdata('status') != "login"){?>
		            	<a href="<?php echo base_url("/loginawal")?>">Login / Daftar</a>
					<?php }else {?>
						<div class="dropdown">
							<button class="dropbtn">Hai <?php echo $this->session->userdata('user') ?>
							  	<i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
								<?php if($this->session->userdata('peran')=="hunter") {?>
									<a href="<?php echo base_url('hunter'); ?>">Profil Hunter</a>
								<?php } else { ?>
									<a href="<?php echo base_url('seller'); ?>">Profil Seller</a>
								<?php } ?>
								<a href="<?php echo base_url('loginhunter/logout'); ?>">Logout</a>
							</div>
						</div>
					<?php } ?>
				</li>

				<li style="float:right;margin-top:10px; margin-right:20px">
				<div class="search-box">
					<input class="search-txt" type="text" name="" placeholder="Type to search">
					<a href="#"><img src="images/search3.png"></a>
					</div>
				</li>
				<!-- <li style="justify-content:center;"><input type="text" class="search-box" placeholder="Cari Danus / Toko"></li> -->
			</ul>
		</div>
	</header>