<?php
	$rows = $this->db->query("SELECT * FROM hunter where username='".$this->session->user."'")->row_array();
?>
<div class="isi">
	<h1>Profile Seller</h1>
	<table width="100%" id="tablegede">
		<tr>
			<td width="50%"><img src="images/avatar.png"></td>
			<td width="50%">
				<table id="tableisi" class="edit">
					<tr>
						<td>Nama</td>
						<td><input  type="text" name="namalengkap" value="<?php echo $rows['namalengkap'] ?>"></td>
					</tr>
					<tr>
						<td>No. HP</td>
						<td><input  type="text" name="no_hp" value="<?php echo $rows['no_hp'] ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" value="<?php echo $rows['email'] ?>"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="namalengkap" value="<?php echo $rows['username'] ?>"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td><input style="margin-left:20px;" id="simpan" type="submit" value="Ubah Gambar"></td>
			<td><input style="float:right;margin-right: 35px;" id="simpan" type="submit" name="simpan" value="Simpan"></td>
		</tr>
	</table>
	</div>