<?php
	$rows = $this->db->query("SELECT * FROM hunter where username='".$this->session->user."'")->row_array();
?>
<div class="isi">
		<h1>Profile Hunter</h1>
	<table width="100%" id="tablegede">
		<tr>
			<td width="50%"><img src="images/avatar.png"></td>
			<td width="50%">
				<table id="tableisi">
					<tr>
						<td>Nama</td>
						<td><?php echo $rows['namalengkap'] ?></td>
					</tr>
					<tr>
						<td>No. HP</td>
						<td><?php echo $rows['no_hp'] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $rows['email'] ?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><?php echo $rows['username'] ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td><a href="">Ganti Foto</a></td>
			<td><a href="ubahprofilehunter.html">Ubah Profil</a></td>
		</tr>
	</table>
	</div>