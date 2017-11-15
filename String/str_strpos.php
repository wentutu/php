<?php 
  $str='/www/myshop/web/index.php';
  $len= strrpos($str,"/")+1;
  echo substr($str,$len);
  echo "<br>";
   echo substr($str,0,$len);
 ?>