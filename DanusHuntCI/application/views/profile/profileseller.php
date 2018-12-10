<div style="padding-top: 100px;">
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
		<td><input style="margin-left:20px;" id="simpan" type="button" value="Ganti Gambar"></td>
		<td><a href="<?php echo base_url('EditSeller')?>"><input style="float:right;margin-right: 35px;" id="simpan" type="button" value="Edit Profile"></a>
	</td>
		</tr>
	</table>

	<br><br>
	<div id="bio">
		<h1>Bio</h1>			
		<p><?php echo $rows['bio'] ?></p>
	</div>
	<h2>List danus seller ini</h2>
	<div>
		<?php
			$idwow = $rows['id_seller'];
			$barang=$this->db->query("SELECT * from barang where id_seller=$idwow");
		?>
		<ul>
            
            <?php foreach ($barang->result_array() as $key): ?>
            <li>
                <?php if (true) {?>
                    <a href=<?php echo base_url().'detailbarang?id='.$key['id_barang']?> >
                        <div class="poinbarang">
                            <img src="<?php echo base_url("images/contohbarang.jpg")?>" style="border-radius:20px;">
                            <p><?php echo $key['namaBarang'] ?></p>
                            <p>RP <?php echo $key['harga'] ?></p>
                        </div>
                    </a>
                <?php }?>
            </li>
            <?php endforeach ?>
            
        </ul>
	</div>
</div>
