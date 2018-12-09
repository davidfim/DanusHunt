<center><h1>List Danusan Asin</h1></center>
<div class="kerangkalist">
    <div class="optionkiri">

    </div>
    <div class="listkanan">
        <ul>
            
            <?php foreach ($barang->result_array() as $key): ?>
            <li>
                <?php if ($key['jenis']=='asin') {?>
                    <a href=<?php echo base_url().'detailbarang?id='.$key['id_barang']?>>
                        <div class="poinbarang">
                            <img src="<?php echo base_url("images/contohbarang.jpg")?>">
                            <p><?php echo $key['namaBarang'] ?></p>
                            <p>RP <?php echo $key['harga'] ?></p>
                        </div>
                    </a>
                <?php }?>
            </li>
            <?php endforeach ?>
            
        </ul>

    </div>
