<center><h1>List Toko</h1></center>
<div class="kerangkalist">
    <div class="optionkiri">

    </div>
    <div class="listkanan">
        <ul>
            
            <?php foreach ($seller->result_array() as $key): ?>
            <li>
              
                    
                        <div class="poinbarang">
                            <img src="<?php echo base_url("images/ava1.jpg")?>">
                            <p><?php echo $key['namalengkap'] ?></p>
                            <p>@<?php echo $key['username'] ?></p>
                        </div>
                   
             
            </li>
            <?php endforeach ?>
            
        </ul>

    </div>
