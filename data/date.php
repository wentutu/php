<?php 
//查看周几
echo date('w');
echo "<br>";
//查看是否是瑞年
echo date('L');
echo "<br>";
//查看当月的天数
echo date('t');
echo "<br>";
//查看微秒
$start=microtime(true);
usleep(100000);
$end=microtime(true);
echo $end-$start;
 ?>