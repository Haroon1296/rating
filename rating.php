<?php 
              $r = intval($rows['rating']); 
              
              for($i = 1; $i <= 5; $i++){
               
               $aa = ""; 
               if($r != 0) { 
                 $aa = 'style="color:#fc0;"'; 
                 $r--; 
              } 
            ?>
               <span class="fa fa-star" <?php echo $aa; ?>></span>
          <?php } ?>
