<div style="padding-top: 100px;">
<center><h1>List Danusan Manis</h1></center>
<div class="kerangkalist">
    <div class="optionkiri">

    </div>
    <div class="listkanan">
        <ul>
            
            <?php foreach ($barang->result_array() as $key): ?>
            <li>
                <?php if ($key['jenis']=='manis') {?>
                    <a href=<?php echo base_url().'detailbarang?id='.$key['id_barang']?>>
                        <div class="poinbarang">
                            <img src="<?php echo $key['image']?>">
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
