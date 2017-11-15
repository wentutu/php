preg_grep.php
<?php 
//在数组中搜索包含指定值的元素
  $arr=array(
 		'linux is very much',
 		'php is very much',
 		'java is very much',
 		'html5 is very much',
  	);
  $arr1=preg_grep('/linux|php|java|html5/',$arr);
  echo "<pre>";
 print_r($arr1);
 echo "</pre>";

 ?>