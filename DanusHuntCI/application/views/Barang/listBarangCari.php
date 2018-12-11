<div style="padding-top: 100px;">
<center><h1>List Danusan</h1></center>
<div class="kerangkalist">
    
    <div class="optionkiri">

    </div>
    <div class="listkanan">
        <ul>

        <?php
            $rows = $this->db->query("SELECT * FROM barang where namaBarang LIKE '%".$_GET['cari']."%'");
        ?>
            <?php foreach ($barang->result_array() as $key): ?>
            <li>
                <?php foreach ($rows->result_array() as $kunci) { ?>
                  <?php if ($kunci['namaBarang']==$key['namaBarang']) {?>
                      <a href=<?php echo base_url().'detailbarang?id='.$key['id_barang']?>>
                          <div class="poinbarang">
                              <img style="border-radius:20px;" src="<?php echo base_url("images/contohbarang.jpg")?>">
                              <p><?php echo $key['namaBarang'] ?></p>
                              <p>RP <?php echo $key['harga'] ?></p>
                          </div>
                      </a>
                <?php }?>
            </li>
            <?php } ?>
        <?php endforeach ?>

        </ul>
    </div>
