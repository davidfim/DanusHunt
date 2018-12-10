<div style="padding-top: 100px;">
<center><h1>List Danusan</h1></center>
<div class="kerangkalist">
    
    <div class="optionkiri">

    </div>
    <div class="listkanan">
        <ul>
            
            <?php foreach ($barang->result_array() as $key): ?>
            <li>
                //cari query buat search
                <?php if () {?>
                    <a href=<?php echo base_url().'detailbarang?id='.$key['id_barang']?>>
                        <div class="poinbarang">
                            <img style="border-radius:20px;" src="<?php echo base_url("images/contohbarang.jpg")?>">
                            <p><?php echo $key['namaBarang'] ?></p>
                            <p>RP <?php echo $key['harga'] ?></p>
                        </div>
                    </a>
                <?php }?>
            </li>
            <?php endforeach ?>
            
        </ul>

    </div>
