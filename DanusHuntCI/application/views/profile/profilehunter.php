<div style="padding-top: 100px;">
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
	<td><input style="margin-left:20px;" id="simpan" type="button" value="Ganti Gambar"></td>
	<td><a href="<?php echo base_url('EditHunter')?>"><input style="float:right;margin-right: 35px;" id="simpan" type="button" value="Edit Profile"></a>
	</td>
		</tr>
	</table>
	</div>