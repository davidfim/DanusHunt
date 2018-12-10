<div style="padding-top: 100px;">

<div class="detail-toko" style="padding-top: 100px;">
  <div class="nama-toko">
    <img src="images/ava1.jpg" alt="Pict">
        <?php foreach ($seller->result_array() as $key): ?>
            <?php if ($key['id_seller']==$_GET['id']) {?>
                <h1 style="margin-left: 30px;"><?php echo $key['namalengkap'];?></h1>
                <h4>@<?php echo $key['username'];?><h4>
                <p><?php echo $key['bio'];?></p>
                <?php
                    $numpangvar = $key['id_seller'];
                    }
                ?>
        <?php endforeach ?>
  </div>
</div>
<div class="listkanan">
        <ul>
            
            <?php foreach ($barang->result_array() as $key): ?>
            <li>
                <?php if ($key['id_seller'] == $numpangvar ){ ?>
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
