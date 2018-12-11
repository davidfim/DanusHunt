<div style="padding-top: 100px;">
<?php
	$rows = $this->db->query("SELECT * FROM seller where username='".$this->session->user."'")->row_array();
?>
<div class="isi">
	<h1>Profile Hunter</h1>
	<form action="<?php echo base_url(). 'editseller/prosesedit'; ?>" method="post">
	<table width="100%" id="tablegede">
		<tr>
			<td width="50%"><img src="<?php echo $rows['image']?>"></td>
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
							<td>ID Line</td>
							<td><input type="text" name="idline" value="<?php echo $rows['idline'] ?>"></td>
						</tr>
						<tr>
							<td>Link Gambar Profile</td>
							<td><input type="text" name="image" value="<?php if($rows['image']=="images/avatar.png"){ echo ("Belum ada gambar");} else {echo $rows['image']; }?>"></td>
						</tr>

					</table>
			</td>
			
			<tr id="tableisi" class="edit">
				<td width="20px">Bio</td>		
				<td><textarea style="resize:none" rows="8" cols="50" type="text" name="bio"><?php echo $rows['bio']?></textarea></td>
			</tr>
			</tr>
			<tr>
				<!-- <td><input style="margin-left:20px;" id="simpan" type="submit" value="Ubah Gambar"></td> -->
				<td>
				<a href="<?php echo base_url('Seller')?>"><input style="float:left;margin-left:35px;margin-bottom:30px;" id="simpan" type="button" value="Batal"></a>
				</td>	
				<td><input style="float:right;margin-right:35px;margin-bottom:30px;" id="simpan" type="submit" name="Simpan" value="Simpan"></td>
			</tr>
			</table>
		</div>
	</form>
