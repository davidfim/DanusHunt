<div style="padding-top: 100px;">
	<div class="detail-barang" style="margin-left: 100px;margin-right: 100px;border-radius:20px;">
	<?php $wow=$this->db->query("SELECT * FROM barang where id_barang='".$_GET['id']."'")->row_array();?>
		<img src="<?php echo $wow['image']?>" alt="" class="foto-danus" style="padding:30px; margin:20px;">
		
		<div class="keterangan" style="margin:20px; margin-left:30px;">
			<div class="nama-barang">
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
			<div class="nama-pelapak">
					
				<div class="pelapak" style="display:flex;flex-direction:row"> 
				  <img style="padding:0;" src="images/avatar.png" alt="Pict" class="profile-thumbnail">
				  <div class="profile-name">
				  <?php foreach ($seller->result_array() as $kunci):?>
							<?php if ($kunci['id_seller']==$numpangvar) { ?>
					    		<h2 style="margin:10px; color:white;"><?php echo $kunci['namalengkap']; ?></h3>
					    		<h4 style="margin:10px; "> @<?php echo $kunci['username'];?></h4>
								<h4 style="margin:10px;">id line: <?php echo $kunci['idline']?></h5>
								<p id="bio"><?php echo $kunci['bio']?></p>
								
								<?php } ?>
							<?php endforeach ?>
					  </div>
				</div>
			</div>
			<?php 
				// if($this->session->userdata('peran')=="seller") {
				// 	if($key['id_seller']==$this->seasson->){	
				// 	}
				// }
			?>
		</div>
		
		
			
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