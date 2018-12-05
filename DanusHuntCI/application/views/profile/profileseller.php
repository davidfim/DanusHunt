<?php
	$rows = $this->db->query("SELECT * FROM seller where username='".$this->session->user."'")->row_array();
?>
<div class="isi">
		<h1>Profile Seller</h1>
	<table width="100%" id="tablegede">
		<tr>
			<td width="50%"><img src="images/avatar.png"></td>
			<td width="50%">
				<table id="tableisi">
					<tr>
						<td>Nama Toko </td>
						<td><?php echo $rows['namalengkap'] ?></td>
                    </tr>
                    <tr>
						<td>Nomor HP </td>
						<td><?php echo $rows['no_hp'] ?></td>
                    </tr>
                    <tr>
	
	
						<td>Email</td>
						<td><?php echo $rows['email'] ?></td>
                    </tr>
                    <tr>
						<td>ID Line</td>
						<td><?php echo $rows['idline'] ?></td>
					</tr>
					<tr>
					<tr>
						<td>Username</td>
						<td><?php echo $rows['username'] ?></td>
				</table>
			</td>
		</tr>
		<tr>
			<td><a href="">Ganti Foto</a></td>
			<td><a href="ubahprofileseller.html">Ubah Profil</a></td>
		</tr>
	</table>
	<br><br>
	<div id="bio">
		<h1>Bio</h1>
		<p><?php echo $rows['bio'] ?></p>
	</div>
</div>