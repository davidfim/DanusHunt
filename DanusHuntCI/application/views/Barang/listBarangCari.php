<div style="padding-top: 100px;">
<center><h1>List Danusan dengan nama ' <?php echo $_GET['cari'] ?> '</h1></center>
<div class="kerangkalist">
    
    <div class="optionkiri">

    </div>
    <?php
        $rows = $this->db->query("SELECT * FROM barang where namaBarang LIKE '%".$_GET['cari']."%'");
    ?>
    <div class="listkanan">
        <ul>
        <?php foreach ($rows->result_array() as $key) { ?>
        <li>
            <a href=<?php echo base_url().'detailbarang?id='.$key['id_barang']?>>
                <div class="poinbarang">
                    <img style="border-radius:20px;" src="<?php echo $key['image']?>">
                    <p><?php echo $key['namaBarang'] ?></p>
                    <p>RP <?php echo $key['harga'] ?></p>
                </div>
            </a>
        </li>
        <?php }?>
        </ul>
    </div>
</div>

