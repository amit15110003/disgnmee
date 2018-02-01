<div class="content-wrapper">
<section class="content">
     <?php

$this->load->helper('directory'); //load directory helper

$dir = "../uploads/thumb"; // Your Path to folder

$map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */


foreach ($map as $k)

{?>
     <img src="<?php echo base_url($dir)."/".$k;?>"  height="200"  width="200"   alt="">
   
<?php }
          
?> 
 
          </section></div>