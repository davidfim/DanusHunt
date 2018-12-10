<div style="padding-top: 100px;">
<center><h1>List Toko</h1></center>
<div class="kerangkalist">
    <div class="optionkiri">

    </div>
    <div class="listkanan">
        <ul>
            
            <?php foreach ($seller->result_array() as $key): ?>
            <li>
              
                    <a href=<?php echo base_url().'detailtoko?id='.$key['id_seller']?>>
                        <div class="poinbarang">
                            <img src="<?php echo base_url("images/avatar.png")?>">
                            <p><?php echo $key['namalengkap'] ?></p>
                            <p>@<?php echo $key['username'] ?></p>
                        </div>
                    </a>
                   
             
            </li>
            <?php endforeach ?>
            
        </ul>

    </div>
</div>