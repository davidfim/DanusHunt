<?php
	$rows = $this->db->query("SELECT * FROM seller where username='".$this->session->user."'")->row_array();
?>

<div class="isi">
	<h1>Tambah Barang</h1>
	<form>
	<table width="100%" id="tablegede">
		<tr>
			<td width="50%"><img src="images/avatar.png"></td>
			<td width="50%">
				<table id="tableisi" class="tambah" >
					<tr>
						<td>Nama Danus </td>
						<td><input id="add" style="padding: 10px; border-radius: 10px;" type="text" name="namaBarang"></td>
                    </tr>
                    <tr>
						<td>Jenis Danus </td>
						<td>
							<select name="jenis">
							<option value="manis">Manis</option>
							<option value="asin">Asin</option>
							</select>
						</td>
                    </tr>
                    <tr>
	
	
						<td>Harga</td>
						<td><input type="text" name="harga"></td>
                    </tr>
                    <tr>
						<td>Keterangan</td>
						<td><input type="text" name="keterangan"></td>
					</tr>
					
				</table>
			</td>
		</tr>
		<tr>
			<td><a style="margin-left:20px;text-decoration: none;" id="simpan" href="<?php echo base_url("/uploadGambar")?>">Tambah Gambar</a></td>
			<td><input style="float:right;margin-right: 35px;" id="simpan" type="submit" name="simpan" value="Jual"></td>
		</tr>
	</table>
</form>
</div>