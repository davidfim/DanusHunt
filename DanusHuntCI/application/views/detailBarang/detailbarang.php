<div style="padding-top: 100px;">
	<div class="detail-barang" style="margin-left: 80px;margin-right: 80px;border-radius:20px;grid-template-columns:1fr 2fr;">
		<img src="images/download.jpg" alt="" class="foto-danus" style="padding:30px; margin:20px;">
		
		<div class="keterangan" style="margin:20px; margin-left:30px;">
			<?php foreach ($barang->result_array() as $key): ?>
				<?php
					if ($key['id_barang']==$_GET['id']) {
						?><h2><?php echo $key['namaBarang'];?></h2><?php
						?><h4>Rp <?php echo $key['harga'];?><h4><?php
						?><!-- <h5>Keterangan Danush</h5> -->
						<p><?php echo $key['keterangan'];?></p>
						<?php
						$numpangvar = $key['id_seller'];
					}
				?>
            <?php endforeach ?>
		</div>
		<!-- <div class="detail-barang2"> 
			<div class="pelapak"> 
				  <img src="images/avatar.png" alt="Pict" class="profile-thumbnail">
				  <div class="profile-name">
							<?php foreach ($seller->result_array() as $kunci):?>
								<?php if ($kunci['id_seller']==$numpangvar) { ?>
					    		<h3><?php echo $kunci['namalengkap']; ?></h3>
					    		<h4>@<?php echo $kunci['username'];?></h4>
								<?php } ?>
							<?php endforeach ?>
					  </div>
			</div> -->
		
			
			<!-- <div class="order-btn"> 
				<button id="kurang" onclick="kurang()">-</button>
				<p id="angka" style="padding="5px 30px"> 0 </p>
				<button id="tambah" onclick="tambah()">+</button>
			</div>

			<div class="beli-btn">
				<button id="beli">Beli</button>
			</div> -->
		</div>
	</div>
<!-- 	

	<script type="text/javascript">
		var angka=document.getElementById("angka");
  		let i=0;
   		function tambah() {
   			i++;
	  		angka.innerHTML=i;
	  	}
 		function kurang() {
 			if (i == 0)
 				i=0;
 			else 
	   		i--;
	   		angka.innerHTML=i;
  		} 
	</script> -->