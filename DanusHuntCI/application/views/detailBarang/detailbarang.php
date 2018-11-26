	<div class="detail-barang">
		<img src="images/download.jpg" alt="" class="foto-danus">
		
		<div class="keterangan">
			<h2>Nama Barang Danusan</h2>
			<h4>Rp xx.000<h4>
			<!-- <h5>Keterangan Danush</h5> -->
			<p>Lorem asdasdasd Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="detail-barang2"> 
			<div class="pelapak"> 
				  <img src="images/avatar.png" alt="Pict" class="profile-thumbnail">
					  <div class="profile-name">
					    <h3>Nama Pelapak</h3>
					    <h4>@ossia</h4>
					  </div>
			</div>
		
			
			<div class="order-btn"> 
				<button id="kurang" onclick="kurang()">-</button>
				<p id="angka" style="padding="5px 30px"> 0 </p>
				<button id="tambah" onclick="tambah()">+</button>
			</div>

			<div class="beli-btn">
				<button id="beli">Beli</button>
			</div>
		</div>
	

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
	</script>