<div style="padding-top: 100px;">
<center><h1>List Danusanaaaaaaaaaaaaaaaaaa</h1></center>
<div class="kerangkalist">
    
    <div class="optionkiri">

    </div>
    <?php
        $rows = $this->db->query("SELECT * FROM barang where namaBarang LIKE '%".$_GET['cari']."%'");
    ?>
    <div class="listkanan">
        <?php var_dump($rows); ?>
    </div>
</div>

