<!-- <div style="padding-top:100px;">
<form  method="post" enctype="multipart/form-data">           
    <input type="file" name="image" id="image" />  
    <br />  
    <input type="submit" name="insert" id="insert" value="Insert"/>  
</form>
</div>

  <!-- <?php foreach ($images->result_array() as $key): ?>
            <li>
            
        
                        <div class="poinbarang">
                            <img src="<?php echo base_url("images/contohbarang.jpg")?>">
                            <p><?php echo $key['namaBarang'] ?></p>
                            <p>RP <?php echo $key['harga'] ?></p>
                        </div>
                    </a>
             
            </li>
            <?php endforeach ?> -->
         -->
<!-- <?php
    //if upload button is pressed
    // if (isset($_POST['insert'])) {
    //     $target = "images/".basename($_FILES['image']['name']);

    //     $image = S_FILES['image']['name'];
        
    //     $sql = "INSERT INTO images (image) value ('$image')";
    //     mysqli_query($db, $sql);


    //     if (move_uploaded_file($_FILES['tmp_name']['name'], starget)) {
    //         $msg = "Image uploaded";
    //     }
    //     else 
    //        $msg = "Something bad";


    // }
?> -->


<!-- <script>
	$(document).ready(function(){  
        nandain variabel id gt, dari yutubnya siih
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 }); 

</script> -->