<div style="padding-top: 100px;">

<div class="detail-toko" style="padding-top: 100px;">
  <div class="nama-toko">
    
        <?php foreach ($seller->result_array() as $key): ?>
            <?php if ($key['id_seller']==$_GET['id']) {?>
                <img src="<?php echo $key['image'];?>" alt="Pict">
                <h1 style="margin-left: 30px;"><?php echo $key['namalengkap'];?></h1>
                <h4 style="margin-left:30px;">@<?php echo $key['username'];?><h4>
                <h4 style="margin-left:30px;">id line:<?php echo $key['idline'];?><h4>
                <p id="bio" style="margin-right:40px;"><?php echo $key['bio'];?></p>
                
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
                        <div class="poinbarang" style="margin-left:30px;">
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
