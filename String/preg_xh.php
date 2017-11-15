<?php 
 //向后引用
$str='2014-10-20';
$pth='/(\d+)-(\d+)-(\d+)/';
$rep='$1/$2=$3';
$rep='\\1/\\2=\\3';
echo preg_replace($pth,$rep,$str);

echo "<pre>";
print_r($mt);
echo "</pre>";

 ?>