preg_split.php
<?php 
//正则分割
 $str='2014-10=20+30/50';
 $arr=preg_split('/-|=|\+|\//',$str);
 echo "<pre>";
 print_r($arr);
 echo "</pre>";

 ?>