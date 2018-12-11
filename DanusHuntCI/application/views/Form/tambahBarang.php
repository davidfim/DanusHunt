<div style="padding-top: 100px;">
<?php
	$rows = $this->db->query("SELECT * FROM seller where username='".$this->session->user."'")->row_array();
?>

<div class="isi">
	<h1>Tambah Barang</h1>
	<form action="<?php echo base_url(). 'tambahBarang/prosestambah'; ?>" method="post">
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
						<td><input id="add" style="padding: 10px; border-radius: 10px;" type="text" name="harga"></td>
                    </tr>
                    <tr>
						<td>Keterangan</td>
						<td><input id="add" style="padding: 10px; border-radius: 10px;" type="text" name="keterangan"></td>
					</tr>
					<tr>
						<td>Link Gambar</td>
						<td><input id="add" style="padding: 10px; border-radius: 10px;" type="text" name="image"></td>
					</tr>
					
				</table>
			</td>
		</tr>
		<tr>
			<!-- <td>
				<form method="post" enctype="multipart/form-data"> -->
				
				<!-- <button style="margin-left:20px;text-decoration: none;" id="custom-button">Tambah Gambar</button> -->
				<!-- <input name="image" type="file" id="image"/><br>
				<input style="margin-left:20px;" type="submit" name="insert" value="insert" id="insert"/>
				 -->
				<!-- </form> -->
			<!-- <span id="custom-text">No file, chosen yet.</span> -->
			<!-- </td> -->
			<td>

			<td><input style="float:right;margin-right: 35px;" id="simpan" type="submit" name="simpan" value="Jual"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</table>
</form>

<a href="<?php echo base_url('uploadGambar') ?>"><button style="margin-left:20px;text-decoration: none;" id="custom-button">Tambah Gambar</button></a>

<!-- <form  method="post" enctype="multipart/form-data">           
    <input type="file" name="image" id="image" />  
    <br />  
    <input type="submit" name="insert" id="insert" value="Insert"/>  
</form> 
           

</div>

<script type="text/javascript">
	// const realFileBtn = document.getElementById("image");
	// const customBtn = document.getElementById("custom-button");
	// const uploadBtn = document.getElementById("upload-button");
	// $("#upload-button").hide();
	// const customTxt = document.getElementById("custom-text");

	// customBtn.addEventListener("click",function() {
	// 	realFileBtn.click();
	// });

	jadi tadinya bikin tombol yg bisa ngelink ke halaman lain gt klo mau aplod gambar
tapo masih bingung jadi nya mauu   gimana format buat aplod gambarnya
	// $(document).ready(function () {
	// 	$('#insert').click( function(){
	// 		var image_name = $('#image').val();
	// 		if (image_name == ''){
	// 			alert("Masukkan gambar");
	// 			return false;
	// 		}
	// 		else {
	// 			var extension = $('#image').val().split('.').pop().toLowerCase();
	// 			if (jQuery.inArray(extension, ['png','jpg','jpeg']) == -1) {
	// 				alert('Invalid Image File');
	// 				$('#image').val('');
	// 				return false;

	// 			}
	// 		}
	// 	})
	// 	// body...
	// })

	

masih ga paham kamu nulis apaan yang aplot gambarnya
jadi bingung mau benerin gimana
	
tpi klo mulai dri awal jg bingunng ngapus apa 

jadi stug gitu loh yg up gambar dr tadi

maaapinn:()
nah ga tau beb kamu kan yg mulai bikin :(
emang tadinya mau ky gimana ngaplodnya?

tpi yang aplodnya masih kosong kan ?

iyaa tadi mau begini bang
si tombol tambah gambar itu ngelink ke hal uload  gambar
jadi terpisah gt(?)
paham?heheheheheheheh iya masihkosong
wait
tadi pagi teh bikin


༼ ºل͟º ༼ ºل͟º ༼ ºل͟º ༽ ºل͟º ༽ ºل͟º ༽ temen temen squidward
(づ｡◕‿‿◕｡)づ boo!
 apa apaan ini wkkwwkkwwkkwkwkwkwkwkw
// realFileBtn.addEventListener("change", function() {
	// 	if (realFileBtn.value) {
	// 		customTxt.innerHTML = realFileBtn.value;
	// 	}
	// 	else {
	// 		customTxt.innerHTML = "No file chosen,yet"
	// 	}
	// })

	$(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
		   }  
		   
gitu pid ngerti ga maksudnya?
heh bambang

jadi gimana pid
apakah kau mengerti?

gini deh
ga akan sempet klo aku harus ngertiin dlu maksudnya kecuali mulai dr awawl
kamu mau ngelanjutin ga ??? 

mending upload ky gitu atau pake link?
tapi btw sok geura coba itu hal uploadGambar ko ga kebuka ya? salah di kontrolernya kah?


		(づ￣ ³￣)づ  wololololololololololollolololololololool (づ￣ ³￣)づ
	puji kulit kerang ajaib(づ￣ ³￣)づ

	bich nouno solloo
	~(˘▾˘~) terererereret(~˘▾˘)~
	(；一_一)
      bosen ah itu wae    
	apaansiiiiiiii wkwkkwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwk	  
		   else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 }); 

</script> -->