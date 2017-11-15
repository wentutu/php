<?php 
  $str='/www/myshop/web/index.php';
  //basename($str),截取文件的目录部分
  echo basename($str);
  echo "<br>";
  //dirname($str)截取路劲中的目录路劲
  echo dirname($str);
  echo "<br>";
  //把路劲转化为数组(目录解析)
  $arr=pathinfo($str);
  //网址解析
  $str1="https://ke.qq.com/webcourse/index.html#course_id=193502&term_id=100229275&taid=1099253929931742&vid=m1416fk89er";
  $arr=parse_url($str1);
  echo '<per>';
  print_r($arr);
  echo '</pre>';

 ?>